<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="register">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

              <!-- country -->
              <div class="mt-4">
                <x-label for="country" :value="__('Country')" />
                <select name="country" class="form-control" required autofocus>
                    <option value="">Select Country</option>
                    @foreach(Symfony\Component\Intl\Countries::getNames() as $code => $name)
                    <option value="{{ $code }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

    <!-- City -->
    <div class="mt-4">
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
            </div>


            <!-- Phonee -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

            <!-- Brithday -->
            <div class="mt-4">
                <x-label for="Brithday" :value="__('Brithday')" />
                <x-input id="Brithday" for="Brithday" class="block mt-1 w-full" type="date" name="Brithday" :value="old('Brithday')" required autofocus />

            </div>

            <!-- gender -->
            <div class="mt-4">
                <x-label for="gender" :value="__('Gender')" />
                <div class="col-md-6" required>
                    <div><input id="Famale" type="radio" class="form-control" name="gender" value="Famale" > {{ (old('gender') == 'Famale') ? 'checked' : '' }} Famale</div>
                    <div><input id="Male" type="radio" class="form-control" name="gender" value="Male"> {{ (old('gender') == 'Male') ? 'checked' : '' }} Male</div>

                </div>
            </div>

            <!-- National -->
            <div class="mt-4">
                <x-label for="National" :value="__('National') />
                <div class=" col-md-6" required>
                    <div>
                        <input id="Palestine" type="radio" class="form-control" name="National" value="Palestine"> {{ (old('National') == 'Palestine') ? 'checked' : '' }} Palestine
                    </div>
                    <div>
                        <input id="Non-Palestine" type="radio" class="form-control" name="National" value="Non-Palestine"> {{ (old('gender') == 'Non-Palestine') ? 'checked' : '' }} Non-Palestine
                    </div>
            </div>
            </div>

          


            <div class="flex items-center justify-end mt-4" style="margin-bottom: 2em; ">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"  style="color: #ffff !important;">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>