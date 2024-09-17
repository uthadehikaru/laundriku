<div class="flex justify-center items-center min-h-screen bg-base-200">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">Login</h2>
            <form wire:submit="login">
                <div class="form-control">
                    <label class="label" for="email">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" id="email" wire:model="email" placeholder="Enter your email" class="input input-bordered" required />
                    @error('email') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                </div>
                <div class="form-control mt-4">
                    <label class="label" for="password">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" id="password" wire:model="password" placeholder="Enter your password" class="input input-bordered" required />
                    @error('password') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                </div>
                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="#" class="link link-hover">Forgot password?</a>
            </div>
        </div>
    </div>
</div>
