<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Admin Dashboard ThemePurchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html lang="en">
<!--begin::Head-->

<head>
    <!-- 		<base href="../../"> -->
    <meta charset="utf-8" />
    <title></title>
    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard" />
    <link rel="canonical" href="{{ route('home') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
        }

        .blockquote {
            font-family: Poppins, Helvetica, sans-serif;
            text-align: center;
            color: #a1a5b7;
            background-color: #f5f8fa;
            border-color: #d6d8db;
            font-size: calc(1.275rem + .3vw);
            position: relative;
            padding: .75rem 1.25rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            overflow-wrap: break-word;
            font-weight: 500 !important;
        }

        .msg-order {
            padding-bottom: 30px;
            display: flex;
            align-items: center;
        }

        .msg-order a {
            text-decoration: none !important;
            color: #009EF7 !important;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-white">
    <!--begin::Main-->
    <div
        style="box-sizing:border-box; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'">
        <div
            style="background-color:#edf2f7; box-sizing:border-box; color:#2f3044; font-family:Arial,Helvetica,sans-serif; font-size:15px; font-weight:normal; line-height:1.5; margin-bottom:0; margin-left:0; margin-right:0; margin-top:0; min-height:100%; padding:0; width:100%">

            <table align="center" border="0" cellpadding="0" cellspacing="0"
                style="border-collapse:collapse; box-sizing:border-box; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'; margin:0 auto; max-width:600px; padding:0; width:100%">
                <tbody>
                    <tr>
                        <td align="center" valign="center" style="text-align:center; padding: 40px">
                            <a href="{{ route('home') }}" rel="noopener" target="_blank">
                                <img src="{{ $logo }}" style="height: 45px" alt="logo">
                    <tr>
                        <td align="left" valign="center">
                            <div
                                style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                                <!--begin:Email content-->
                                <div style="padding-bottom: 30px; font-size: 17px;">
                                    <strong>Thank you for your business!</strong>
                                </div>
                                <div style="padding-bottom: 30px">{!! $msg_order !!}</div>
                                <div style="text-align:center;padding-bottom: 15px">
                                    <a href="{{ $url }}" rel="noopener"
                                        style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle"
                                        target="_blank">View</a>
                                </div>
                                @if($notes)
                                <div style="padding-bottom: 30px">
                                    <p class='blockquote'>"&nbsp;{{ $notes }}&nbsp;"<br>
                                        <i
                                            style="color:blue;text-align:left;font-size: 1.25rem!important;">&nbsp;-&nbsp;{{ auth()->user()->first_name }}</i>
                                    </p>
                                </div>
                                @endif
                                <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                                <div style="padding-bottom: 50px; word-wrap: break-all;">
                                    <p style="margin-bottom: 10px;">Button not working? Try pasting this URL into your
                                        browser:</p>
                                    <a href="{{ $url }}" rel="noopener" target="_blank"
                                        style="text-decoration:none;color: #009EF7">{{ $url }}</a>
                                </div>
                                <!--end:Email content-->

                                <div class='table-responsive'>
                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                        style="border-collapse:collapse; box-sizing:border-box; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'; margin:0 auto; max-width:600px; padding:0; width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width: 50px;">&nbsp;</th>
                                                <th style="width: 150px;">Item</th>
                                                <th style="width: 50px;">Qty</th>
                                                <th style="width: 50px;">Price</th>
                                                <th style="width: 50px;">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($order->orderItems as $oi)
                                            @php $i = $oi->item; @endphp
                                            <tr class="font-weight-boldest border-bottom-0">
                                                <td><img width="50px"
                                                        src="{{ route('images', ['image_id' => $i->product->image->id, 'size' => '50']) }}" />
                                                </td>
                                                <td><a
                                                        href="{{ route('products.show', $i->product->slug) }}">{{ $i->product->title }}</a>
                                                </td>
                                                <td>{{ $oi->quantity }}</td>
                                                <td>{{ $i->formattedPrice() }}</td>
                                                <td>{{ $oi->formattedTotal() }}</td>
                                            </tr>
                                            @endforeach

                                            <tr style="border: #f3f3f3; border-top: 1px solid;">
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="padding-top: 15px;">{{ $order->formattedTotal() }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div style="padding-bottom: 10px">&nbsp;
                                    <br>
                                    @if($facebook || $twitter || $instagram || $youtube)
                    <tr>
                        <td align="center" valign="center"
                            style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                            @if($facebook)
                            <a href="{{ $facebook }}" style="text-decoration: none;">
                                <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" width="20"
                                    height="20" alt=""
                                    style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;" />
                            </a>
                            <span>&nbsp;&nbsp;</span>
                            @endif
                            @if($twitter)
                            <a href="{{ $twitter }}" style="text-decoration: none;">
                                <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}" width="21"
                                    height="18" alt=""
                                    style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;"></a>
                            <span>&nbsp;&nbsp;</span>
                            @endif

                            @if($instagram)
                            <a href="{{ $instagram }}" style="text-decoration: none;">
                                <img src="{{ asset('assets/media/svg/brand-logos/instagram-2016.svg') }}" width="21"
                                    height="18" alt=""
                                    style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;"></a>
                            <span>&nbsp;&nbsp;</span>
                            @endif

                            @if($youtube)
                            <a href="{{ $youtube }}" style="text-decoration: none;">
                                <img src="{{ asset('assets/media/svg/brand-logos/youtube-play.svg') }}" width="21"
                                    height="18" alt=""
                                    style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;"></a>
                            <span>&nbsp;&nbsp;</span>
                            @endif
                        </td>
                    </tr>
                    @endif

        </div>
    </div>
    </td>
    </tr>
    </img>
    </a>
    </td>
    </tr>
    </tbody>
    </table>

    <br>
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="border-collapse:collapse; box-sizing:border-box; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol'; margin:0 auto; max-width:600px; padding:0; width:100%">
        <thead>
            <tr
                style="font-weight:500;color: #a1a5b7!important;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: #eff2f5;">
                <th style="min-width: 70px;color:inherit;border:inherit;padding:8px; padding-left:0px;">&nbsp;</th>
                <th style="width: 100%;color:inherit;border:inherit;padding:8px;">Item</th>
                <th style="min-width: 60px;color:inherit;border:inherit;padding:8px;text-align:center;">Qty</th>
                <th style="min-width: 60px;color:inherit;border:inherit;padding:8px;text-align:right;">Price</th>
                <th
                    style="min-width: 60px;color:inherit;border:inherit;padding:8px;padding-right:0px;text-align:right;">
                    Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderItems as $oi)
            @php $i = $oi->item; @endphp
            <tr class="font-weight-boldest"
                style="color:#7e8299!important;font-weight:500;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: #eff2f5;">
                <td style="border:inherit;padding:8px;"><img width="50px"
                        src="{{ route('images', ['image_id' => $i->product->image->id, 'size' => '50']) }}" /></td>
                <td style="border:inherit;padding:8px;">
                    <a style="text-decoration: none !important;color:#009EF7!important;"
                        href="{{ route('products.show', $i->product->slug) }}">{{ $i->product->title }}</a>
                </td>
                <td style="border:inherit;padding:8px;text-align:center;">{{ $oi->quantity }}</td>
                <td style="border:inherit;padding:8px;text-align:right;">{{ $i->formattedPrice() }}</td>
                <td style="border:inherit;padding:8px;padding-right:0px;text-align:right;">{{ $oi->formattedTotal() }}
                </td>
            </tr>
            @endforeach
            <tr
                style="color:#7e8299!important;font-weight:500;border-top-width: 2px;border-top-style: solid;border-top-color: #eff2f5;">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td style="padding:16px;padding-right:0px;text-align:right;">{{ $order->formattedTotal() }}</td>
            </tr>
        </tbody>
    </table>

    <div style="padding-bottom: 10px">
        &nbsp;<br>
        @if($facebook || $twitter || $instagram || $youtube)
        <tr>
            <td align="center" valign="center"
                style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                @if($facebook)
                <a href="{{ $facebook }}" style="text-decoration:none;color: #009EF7;">
                    <img src="https://img.icons8.com/color/48/000000/facebook-circled--v1.png" width="20" height="20"
                        alt=""
                        style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;" />
                </a>
                <span>&nbsp;&nbsp;</span>
                @endif
                @if($twitter)
                <a href="{{ $twitter }}" style="text-decoration:none;color: #009EF7;">
                    <img src="https://img.icons8.com/color/48/000000/twitter--v1.png" width="21" height="18" alt=""
                        style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;" />
                </a>
                <span>&nbsp;&nbsp;</span>
                @endif

                @if($instagram)
                <a href="{{ $instagram }}" style="text-decoration:none;color: #009EF7;">
                    <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" width="21" height="18" alt=""
                        style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;" />
                </a>
                <span>&nbsp;&nbsp;</span>
                @endif

                @if($youtube)
                <a href="{{ $youtube }}" style="text-decoration:none;color: #009EF7;">
                    <img src="https://img.icons8.com/color/48/000000/youtube-squared.png" width="21" height="18" alt=""
                        style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; font-size: 14px; color: #ffffff;" />
                </a>
                <span>&nbsp;&nbsp;</span>
                @endif
            </td>
        </tr>
        @endif
    </div>

    <div style="text-align:center;">
        <div>{{ $phone }}</div>
        <div class="email">{{ $email }}</div>
        <div>{{ $address }}</div>
        <div>&copy;&nbsp;{{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')&nbsp;<a
                style="text-decoration:none;color: #009EF7;" href="{{ route('home') }}" rel="noopener"
                target="_blank">{{ config('app.name') }}</a></div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
