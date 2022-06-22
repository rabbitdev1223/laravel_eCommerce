<?php

namespace App\Http\Controllers\Frontend\Manager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Location;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $period_1_ini = Carbon::now()->startOfMonth();
        $period_1_end = Carbon::now()->endOfMonth();

        $period_2_ini = Carbon::now()->subMonths(1)->startOfMonth();
        $period_2_end = Carbon::now()->subMonths(1)->endOfMonth();

        $period_3_ini = Carbon::now()->subMonths(2)->startOfMonth();
        $period_3_end = Carbon::now()->subMonths(2)->endOfMonth();

        $period_4_ini = Carbon::now()->subMonths(3)->startOfMonth();
        $period_4_end = Carbon::now()->subMonths(3)->endOfMonth();

        $table1 = Order::whereBetween('created_at', [
            $period_1_ini,
            $period_1_end
        ])->get();
        $table2 = Order::whereBetween('created_at', [
            $period_2_ini,
            $period_2_end
        ])->get();
        $table3 = Order::whereBetween('created_at', [
            $period_3_ini,
            $period_3_end
        ])->get();
        $table4 = Order::whereBetween('created_at', [
            $period_4_ini,
            $period_4_end
        ])->get();

        $title1 = $period_1_ini->monthName . " " . $period_1_ini->year;
        $title2 = $period_2_ini->monthName . " " . $period_2_ini->year;
        $title3 = $period_3_ini->monthName . " " . $period_3_ini->year;
        $title4 = $period_4_ini->monthName . " " . $period_4_ini->year;

        $initial_dt = Carbon::now()->modify('this week -7 days')->format('Y-m-d') . ' 00:00:00';
        $final_dt = Carbon::now()->format('Y-m-d') . ' 23:59:59';

        if ($request->input('dates', null)) {
            $dates = explode("|", base64_decode($request->dates));
            try {
                $initial_dt = Carbon::parse($dates[0])->format('Y-m-d') . ' 00:00:00';
                $final_dt = Carbon::parse($dates[1])->format('Y-m-d') . ' 23:59:59';
            } catch (\Exception $e) {
                $initial_dt = Carbon::now()->modify('this week -7 days')->format('Y-m-d') . ' 00:00:00';
                $final_dt = Carbon::now()->format('Y-m-d') . ' 23:59:59';
            }
        }

        $diffInDays = Carbon::parse($initial_dt)->diffInDays(Carbon::parse($final_dt));

        $orders_by_dates = DB::table("orders")
            ->select(DB::raw("CONCAT(orders.address,' ', orders.city_id,' ', orders.zipcode) as address_complete"), 'orders.user_id', "order_items.order_id", "order_items.item_id", "order_items.quantity", "order_items.sale_price", DB::raw("(order_items.sale_price * order_items.quantity) as total_item"))
            ->join('order_items', 'order_items.order_id', '=', 'orders.id')
            ->whereBetween('orders.created_at', [$initial_dt, $final_dt])->get();

        $order_item_id = DB::table("orders")
            ->select(DB::raw("COUNT(order_items.item_id) as nCount"), DB::raw("SUM(order_items.quantity) as quantity"), 'order_items.item_id')
            ->join('order_items', 'order_items.order_id', '=', 'orders.id')
            ->whereBetween('orders.created_at', [$initial_dt, $final_dt])
            ->groupBy('order_items.item_id')
            ->orderByRaw("quantity DESC")
            ->limit(1)->get()->first();

        $order_user_id = DB::table("orders")
            ->select(DB::raw("COUNT(orders.user_id) as nCount"), DB::raw("SUM(order_items.quantity) as quantity"), 'orders.user_id')
            ->join('order_items', 'order_items.order_id', '=', 'orders.id')
            ->whereBetween('orders.created_at', [$initial_dt, $final_dt])
            ->groupBy('orders.user_id')
            ->orderByRaw("quantity DESC")
            ->limit(1)->get()->first();

        $order_id_by_location = DB::table("orders")
            ->select(
                DB::raw("CONCAT(orders.address,' ', orders.city_id,' ', orders.zipcode) as address_complete"),
                DB::raw("COUNT(CONCAT(orders.address,' ', orders.city_id,' ', orders.zipcode)) as nCount"),
                DB::raw("SUM(order_items.quantity) as quantity")
            )
            ->join('order_items', 'order_items.order_id', '=', 'orders.id')
            ->whereBetween('orders.created_at', [$initial_dt, $final_dt])
            ->groupBy('address_complete')
            ->orderByRaw("quantity DESC")
            ->limit(1)->get()->first();

        $total_week_product = 0;
        $total_week_user = 0;
        $total_week_location = 0;
        foreach ($orders_by_dates as $order) {


            if ($order_item_id && $order_item_id->nCount > 0) {
                if ($order->item_id == $order_item_id->item_id) {
                    $total_week_product = $total_week_product + $order->total_item;
                }
            }

            if ($order_user_id && $order_user_id->nCount > 0) {
                if ($order->user_id == $order_user_id->user_id) {
                    $total_week_user = $total_week_user + $order->total_item;
                }
            }

            if ($order_id_by_location && $order_id_by_location->nCount > 0) {
                if ($order->address_complete == $order_id_by_location->address_complete) {
                    $total_week_location = $total_week_location + $order->total_item;
                }
            }
        }

        $total_users = 0;
        $total_location = 0;
        $total_items_product = 0;
        $product_best_sale = "";
        $best_user = "";
        $best_location = '';

        if ($order_item_id && $order_item_id->nCount > 0) {

            $item = Item::find($order_item_id->item_id);
            $temp_op = "";
            foreach ($item->itemOptions as $option) {
                $temp_op = $temp_op . ' ' . $option->itemOptionValue->title;
            }

            $product_best_sale = $item->product->title . $temp_op . ' - ' . $item->itemUom->title;

            $total_items_product = $order_item_id->quantity;
        }

        if ($order_user_id && $order_user_id->nCount > 0) {
            $temp_user = User::find($order_user_id->user_id);
            $best_user = $temp_user->email . ' - ' . $temp_user->first_name . " " . $temp_user->last_name;

            $total_users = $order_user_id->quantity;
        }


        if ($order_id_by_location && $order_id_by_location->nCount > 0) {
            $tempOrderId = DB::table("orders")
                ->where(DB::raw("CONCAT(orders.address,' ', orders.city_id,' ', orders.zipcode)"), '=', $order_id_by_location->address_complete)
                ->get()->first()->id;
            $temp_order = Order::find($tempOrderId);

            $best_location = "{$temp_order->address}  {$temp_order->city->title} - {$temp_order->city->state->code}, {$temp_order->zipcode}";
            $total_location = $order_id_by_location->quantity;
        }

        $total_week_product = '$' . number_format($total_week_product / 100, 2);
        $total_week_user = '$' . number_format($total_week_user / 100, 2);
        $total_week_location = '$' . number_format($total_week_location / 100, 2);

        $initial_dt = Carbon::parse($initial_dt)->format('m/d/Y');
        $final_dt = Carbon::parse($final_dt)->format('m/d/Y');

        $employees = User::role('user')->where('email', '!=', 'shopper@shopper.com')->with('job', 'department', 'location')->get();

        return view('frontend.manager.dashboard', compact('total_location', 'best_location', 'total_week_location', 'total_users', 'best_user', 'total_week_user', 'total_items_product', 'product_best_sale', 'total_week_product', 'initial_dt', 'final_dt', 'diffInDays', 'table1', 'table2', 'table3', 'table4', 'title1', 'title2', 'title3', 'title4', 'employees'));
    }
}
