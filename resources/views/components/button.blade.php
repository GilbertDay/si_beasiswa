<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-white text-gray-800 hover:bg-gray-800 hover:text-white whitespace-nowrap']) }}>
    {{ $slot }}
</button>
