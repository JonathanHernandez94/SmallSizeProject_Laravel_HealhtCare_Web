<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105']) }}>
    {{ $slot }}
</button>
