<div>
    <div class="modal-content cs_modal border border-0">
        <div class="modal-header justify-content-center pb-0">
            <div class="d-flex justify-content-center align-items-center">
                <div class="" style="height: 80px; width: 80px;">
                    <a href="">
                        <img src="{{ asset('asset/images/logo.jpg') }}" class="img-fluid rounded-circle" alt="">
                    </a>
                </div>
            </div>
        </div>

        @if (session('error'))
            <div class="modal-header justify-content-center bg-danger mt-2">
                <h5 class="modal-title text-white">{{ session('error') }}</h5>
            </div>
        @endif

        <div class="modal-body" style="background: #F7FAFF;">

            <h4 class="text-center text-dark pb-2">Login Your Account </h4>
            <form wire:submit.prevent="submitLogin">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="">
                    <input type="text" wire:model="email" class="form-control" placeholder="Enter your email">
                </div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="">
                    <input type="password" wire:model="password" class="form-control" placeholder="Password">
                </div>
                <div class="text-end">
                    <a href="#" class="m-0" data-toggle="modal" data-target="#forgot_password"
                        data-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                </div>
                <button type="submit" class="btn_1 full_width text-center border border-0"
                    style="background: #FF5252">Log in</button>
            </form>

        </div>
    </div>
</div>
