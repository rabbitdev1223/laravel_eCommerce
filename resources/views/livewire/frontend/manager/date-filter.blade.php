<div class='col-xl-5'>
	<div class="card">
		<div class="card-body">
			<span>@csrf</span>
			<div class="row">
				<div class="col-lg-3 pt-10">
					<button wire:click="search" class="btn btn-sm btn-light-danger" >Search</button>
				</div>
				<div class="col-lg-7">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-6 fv-row fv-plugins-icon-container">
							<label class='form-label'>Initial Date</label> 
							<input type="text" wire:model="initial_dt" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Initial Date" value="{{  \Carbon\Carbon::parse($initial_dt)->format('m/d/Y') }}">
						<div class="fv-plugins-message-container invalid-feedback"></div></div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-6 fv-row fv-plugins-icon-container">
							<label class='form-label'>Final Date</label> 
							<input type="text" wire:model="final_dt" class="form-control form-control-lg form-control-solid" placeholder="Final Date" value="{{  \Carbon\Carbon::parse($final_dt)->format('m/d/Y') }}">
						<div class="fv-plugins-message-container invalid-feedback"></div></div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Col-->
			</div>     
		</div>
	</div>
</div>