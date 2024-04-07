@props(['image', 'alt', 'colSpan', 'rowSpan', 'textColor'])

<li class="bg-white rounded-lg shadow-xl {{ $colSpan }} {{ $rowSpan }} relative overflow-hidden">
    <img class="object-cover w-full h-full" src="{{ $image }}" alt="{{ $alt }}">
    <p
        class="absolute inset-0 flex justify-center items-center text-4xl font-bold {{ $textColor }} bg-white bg-opacity-10 opacity-0 hover:opacity-100 cursor-default hover:cursor-pointer transition-all duration-200 ease-in-out">
        View Project
    </p>
</li>
