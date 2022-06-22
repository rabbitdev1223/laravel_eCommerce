<div>
    <h4 class="mb-0 text-success fs-2x w-bolder">{{ $price }}</h4>
    <div class="my-8 row justify-content-between align-items-center">
        <div class="col-12 col-md">
            <div class="row justify-content-start">

                {{-- UOM --}}
                <div wire:ignore class="mt-4 mb-4 col-6 col-md-3 fv-row fv-plugins-icon-container mt-md-0 mt-lg-0">
                    <label class="mb-2 text-gray-600 fw-bolder">UOM</label>
                    <select wire:model='uom' id="uom" aria-label="Choose a UOM" data-control="select2" data-placeholder="Choose a UOM" class="w-full form-control form-select form-select-md select2-hidden-accessible" data-hide-search="true">
                    	 <option value=''>Choose a UOM</option>
                            @foreach ($uoms as $unit)
                            	<option @if(count($uoms) == 1) selected="selected" @endif value='{{ $unit->id }}'>{{ Illuminate\Support\Str::title($unit->title) }}</option>
                            @endforeach
                    </select>
                </div>

                {{-- quantity --}}
                <div wire:ignore class="mt-4 mb-4 col-6 col-md-3 fv-row fv-plugins-icon-container mt-md-0 mt-lg-0">
                    <label class="mb-2 text-gray-600 fw-bolder">Quantity</label>
                    <div id="kt_dialer_quantity" class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1"
                        data-kt-dialer-max="50000" data-kt-dialer-step="1">
                        <button id="kt_dialer_decrease_btn" type="button"
                            class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                            data-kt-dialer-control="decrease">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.25"
                                        d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                        fill="#12131A"></path>
                                    <path
                                        d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z"
                                        fill="#12131A"></path>
                                </svg>
                            </span>
                        </button>
                        <input type="number" id="quantity" wire:model="quantity" class="px-12 text-center form-control"
                            min="1" step="1" data-kt-dialer-control="input" placeholder="Quantity">
                        <button id="kt_dialer_increase_btn" type="button"
                            class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                            data-kt-dialer-control="increase">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                        fill="#12131A"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z"
                                        fill="#12131A"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>


                {{-- dynamic options --}}
                
                @foreach ($itemOptions->sortBy('item_option_type_id')->groupBy('item_option_type_id') as $item_options)
                	@php 
                		$io = $item_options->first();
                		if(!$io){
                			continue;
                		} 
            		@endphp
                    @if ($io->itemOptionType->is_radio)
                    
                        <div class="mt-4 mb-4 form-group">
                            <label class="mb-2 text-gray-600 fw-bolder">{{ Illuminate\Support\Str::title($item_options->first()->itemOptionType->title) }}</label>
                            <div class="flex-wrap d-flex">
                                @foreach ($item_options->unique('item_option_value_id') as $option)
                                <div class="mb-4 form-check color-radio form-check-custom form-check-solid me-10">
                                    <input id='options.{{ $loop->parent->iteration }}' wire:model='options_ids.{{ $loop->parent->iteration }}'
                                        class="colors @if($item_options && count($item_options->unique('item_option_value_id')) > 1) uncheck @endif form-check-input h-20px w-20px color_{{ $option->item_option_value_id }} @if(count($options_ids) > 0 && $options_ids[$loop->parent->iteration] == $option->item_option_value_id) selected @endif @if($option->itemOptionValue->title == 'white') white @endif"
                                        type="radio"
                                        style="background-color:{{ $option->itemOptionValue->colorHash($option->itemOptionValue->title) }}; @if($option->itemOptionValue->title == 'white') border:1px solid black @endif"
                                        value="{{ $option->item_option_value_id }}" />
                                    <label class="form-check-label radio_label"
                                        style="text-transform:capitalize; @if(count($options_ids) > 0 &&  $options_ids[$loop->parent->iteration] == $option->item_option_value_id) font-weight:bold; @endif">{{ Illuminate\Support\Str::title($option->itemOptionValue->title) }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    
                    @else
                    
                        <div wire:ignore class="mt-4 mb-4 col-6 col-md-3 fv-row fv-plugins-icon-container mt-md-0 mt-lg-0">
                            <label class=" mb-2 text-gray-600 fw-bolder">{{ Illuminate\Support\Str::title($item_options->first()->itemOptionType->title) }}</label>
                            <select data-placeholder="Choose a {{ $io->itemOptionType->title }}"  id="{{ $io->itemOptionType->title }}-select" class="w-full form-control form-select form-select-md select2-hidden-accessible dinamic_select" data-hide-search="true">
                                <option value=''>Choose a {{ $item_options->first()->itemOptionType->title }}</option>
                                @foreach ($item_options->unique('item_option_value_id') as $option)
                                	<option value='{{ $option->item_option_value_id }}'>{{ Illuminate\Support\Str::upper($option->itemOptionValue->title) }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                    @endif
                @endforeach

            </div>

            <div class="mt-7 d-flex align-items-center">
                <button wire:click="addToCart" class="btn btn-primary d-flex align-items-center">
                    <i class="bi bi-cart-fill"></i>
                    <span class="d-block ml-10px">Add to cart</span>
                </button>
                <livewire:frontend.products.favorite :product="$product" />
            </div>

        </div>
    </div>
</div>

@push('styles')
<style>
    /* Chrome, Safari, Edge, Opera */
    #kt_dialer_quantity #quantity::-webkit-outer-spin-button,
    #kt_dialer_quantity #quantity::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    #kt_dialer_quantity input#quantity[type=number] {
        -moz-appearance: textfield;
    }
</style>
@endpush

@push('scripts')
<script type="text/javascript">
    

    $(document).ready(function() {

    	var dialerElement = document.querySelector("#kt_dialer_quantity");
        var dialerObject = KTDialer.getInstance(dialerElement);
        
		function populateOptions(){
			var options_list = @this.optionByItem;
			var opt = @this.itemOptions;
			
			var uom = @this.uom;
            
			var options = [];
			options[0] = new Option('Choose a Size', null);
			 
			$('.dinamic_select').find('option').remove();
			$('.dinamic_select').trigger('change.select2');

		    
			for ( var i = 0, l = opt.length; i < l; i++ ) {
			    var line = options_list[i];
			    if(!line || line.item_option_type.is_radio != 0)
				    continue;
			    
				var id_select = '#'+line.item_option_type.title+'-select';
			    $(id_select).find('option').remove();
			    
			   
			    
			    
			    $.each(options_list , function(index, obj) { 
				    if(line.item_option_type.id == obj.item_option_type.id){
					    if(uom && obj.item.item_uom_id == uom){
					    	options[index+1] = new Option(obj.item_option_value.title.toUpperCase(), obj.item_option_value_id);
					    }else if(!uom){
				    		options[index+1] = new Option(obj.item_option_value.title.toUpperCase(), obj.item_option_value_id);
			    		}
				    }
					
					 
				});

			    $(id_select).html(options);
			    $(id_select).val('');
			    $(id_select).trigger('change.select2');
			    
			}
		}

		
        

        dialerObject.value = @this.quantity;

        @foreach ($itemOptions->sortBy('item_option_type_id')->groupBy('item_option_type_id') as $options)
        @if (!$options->first()->itemOptionType->is_radio)
        $('#{{ $options->first()->itemOptionType->title }}-select').select2();
        $('#{{ $options->first()->itemOptionType->title }}-select').on('change', function(e) {

        	if($('#uom').val() == "" || !$('.colors').is(":checked")){
				$(this).val('');
			    $(this).trigger('change.select2');
				return;
			}
            
            var data = $('#{{ $options->first()->itemOptionType->title }}-select').select2('val');
            @this.set('options_ids.{{ $loop->iteration }}', parseInt(data));
            dialerObject.value = 1;

            
        });
        @endif
        @endforeach

		$("[id^='options.']").on('change',function(){
			setTimeout(function(){ 
				populateOptions();
			 }, 500);
			
		});
        
        $('#uom').select2();
        $('#uom').on('change', function(e) {
            var data = $(this).val();
            @this.set('uom', parseInt(data));
            dialerObject.value = 1;
            setTimeout(function(){ 
                populateOptions();
			 }, 500);
        });



        $('#kt_dialer_decrease_btn, #kt_dialer_increase_btn').click(function(e) {
            // var data = $('#quantity').val();
            @this.set('quantity', dialerObject.value);

            // console.log(dialerObject.value);
            // dialerObject.value = @this.quantity;
        });

    });
</script>
@endpush
