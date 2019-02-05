@if(session()->has('success'))
    <div class="toaster toaster-success">
        <div class="inline-block align-middle text-right ml-2">
            <i class="fa fa-check ml-2" style="font-size:35px;"></i>
        </div>
        <div class="inline-block align-middle ml-3" style="max-width:80%;margin-top:-4px !important;">
            <div class="block" style="font-size:15px;">
                <span class="block">
                    {!! session()->get('success') !!}
                </span>
            </div>
        </div>
    </div>
@endif

@if($errors->has('error'))
    <div class="toaster toaster-danger">
        <div class="inline-block align-middle text-right ml-2">
            <i class="fa fa-exclamation-triangle ml-2" style="font-size:34px;"></i>
        </div>
        <div class="inline-block align-middle ml-3" style="max-width:80%;margin-top:-4px !important;">
            <div class="block" style="font-size:15px;">
                <span class="block">
                    {!! $errors->first('error') !!}
                </span>
            </div>
        </div>
    </div>
@endif