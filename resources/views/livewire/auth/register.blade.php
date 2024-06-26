<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEDOO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .navbar-bg {
            background-color: #D9D9D9; /* Light grey color */
        }
    </style>
</head>
<body>
<section class="bg-white">
  <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
    <section class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
      <img
        alt=""
        src="https://images.unsplash.com/photo-1607190074257-dd4b7af0309f?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        class="absolute inset-0 h-full w-full object-cover opacity-80"
      />

      <div class="hidden lg:relative lg:block lg:p-12">
      

        <h2 class="mt-6 text-4xl font-bold text-white sm:text-3xl md:text-4xl">
          Welcome to WEDOO
        </h2>

        <p class="mt-4 leading-relaxed text-white">
          Create a new account to join our community!
        </p>
      </div>
    </section>

    <main
      aria-label="Main"
      class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
    >
      <div class="max-w-xl lg:max-w-3xl">

        <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
          Create a new account
        </h1>

        <form action="#" class="mt-8 grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label for="FirstName" class="block text-sm font-medium text-gray-700">
              First Name
            </label>

            <input
              type="text"
              id="FirstName"
              name="first_name"
              class="mt-1 w-full rounded-md border bg-white text-sm text-gray-700 shadow-sm"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="LastName" class="block text-sm font-medium text-gray-700">
              Last Name
            </label>

            <input
              type="text"
              id="LastName"
              name="last_name"
              class="mt-1 w-full rounded-md border bg-white text-sm text-gray-700 shadow-sm"
            />
          </div>

          <div class="col-span-6">
            <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>

            <input
              type="email"
              id="Email"
              name="email"
              class="mt-1 w-full rounded-md border bg-white text-sm text-gray-700 shadow-sm"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="Password" class="block text-sm font-medium text-gray-700"> Password </label>

            <input
              type="password"
              id="Password"
              name="password"
              class="mt-1 w-full rounded-md border bg-white text-sm text-gray-700 shadow-sm"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
              Password Confirmation
            </label>

            <input
              type="password"
              id="PasswordConfirmation"
              name="password_confirmation"
              class="mt-1 w-full rounded-md border bg-white text-sm text-gray-700 shadow-sm"
            />
          </div>

          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
          <button
              class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
            >
              Create an account
            </button>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
              Already have an account?
              <a href="/login" class="text-gray-700 underline">Log in</a>.
            </p>
          </div>
        </form>
      </div>
    </main>
  </div>
</section>
</body>
</html>