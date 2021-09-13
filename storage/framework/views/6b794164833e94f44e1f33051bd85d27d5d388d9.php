<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900" href="/login">Logout</a>
                    </nav>
    </div>

<div>
  <div class="h-screen flex justify-center items-center">
    <div class="p-5 bg-gray-400 w-3/4 rounded-lg">
      <form class="p-3 flex flex-col space-y-5">
      <h2 class="font-bold text-center text-2xl mb-5">Search Form</h2>
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
            <div class="group inline-block">
  <button
    class="outline-none focus:outline-none border px-3 py-1 bg-white rounded-sm flex items-center min-w-32">
    <span class="pr-1 font-semibold flex-1">Dropdown</span>
    <span>
      <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
      </svg>
    </span>
  </button>
        <ul class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Name</li>
            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Serial Number</li>
        </ul>
    </div>

            <style>
            */
            li>ul                 { transform: translatex(100%) scale(0) }
            li:hover>ul           { transform: translatex(101%) scale(1) }
            li > button svg       { transform: rotate(-90deg) }
            li:hover > button svg { transform: rotate(-270deg) }
            .group:hover .group-hover\:scale-100 { transform: scale(1) }
            .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
            .scale-0 { transform: scale(0) }
            .min-w-32 { min-width: 8rem }
            </style> 
    </div>
        <input type="text" placeholder="First Name" class="p-2 w-3/4bg-gray-100" />
        <input type="email" placeholder="Middle Name" class="p-2 bg-gray-100" />
        <input type="text" placeholder="Last Name" class="p-2 bg-gray-100" />
        <input type="text" placeholder="Serial Number " class="p-2 bg-gray-100" />
        <button type="button" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
        <a class="mr-5 hover:text-gray-900" href="/result">Submit</a></button>
      </form>
    </div>
  </div>
  <div class="h-screen flex justify-center items-center">
    <div class="p-5 bg-gray-400 w-1/2 rounded-lg">
      <form class="p-3 flex flex-col space-y-10">
        <p class="text-xl">Login</p>
        <input type="email" placeholder="email" class="p-2 bg-gray-100" />
        <input type="password" placeholder="password" class="p-2 bg-gray-100" />
        <button type="submit" class="p-2 bg-gray-100 rounded">Searck</button>
      </form>
    </div>
  </div>
</div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel8\resources\views/search.blade.php ENDPATH**/ ?>