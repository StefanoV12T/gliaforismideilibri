<div class="js-cookie-consent py-5 cookie-consent bottom-0 container-fluid">
    <div class="mx-auto py-5 container">
        <div class="py-5 row">
            <div class="flex items-center flex-wrap">
                <div class="w-0 flex-1 items-center hidden md:inline col-12">
                    <p class="m-3 cookie-consent__message card border-black py-1">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto col-12 ">
                    <button class="js-cookie-consent-agree btn bg-white border-1 border-black cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
