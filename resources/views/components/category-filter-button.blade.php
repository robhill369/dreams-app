<style>
    /* CHECKBOX TOGGLE SWITCH */
    /* @apply rules for documentation, these do not work as inline style */
    input:checked~.dot {
        background-color: #667eea;
        border: #FFFBEB;
    }
</style>
<div class="ml-6 mt-6 flex justify-evenly">
    {{-- Funny --}}
    <div class="mr-6">

        <label class=" items-center cursor-pointer">
            <!-- toggle -->
            <div class="relative">
                <!-- input -->
                <input type="checkbox" id="funny" class="sr-only" name="funny" value="funny">
                <!-- line -->
                <div class="block peer hidden">
                </div>
                <!-- dot -->
                <div name="onclick"
                    class="dot shadow-lg relative bg-yellow-50 border border-gray-800 items-center flex px-5 h-12 rounded-full transition peer-checked:#667eea text-center">
                    <label for="funny"
                        class="items-center whitespace-nowrap text-gray-800 text-sm tracking-wider font-bold">Funny</label>
                </div>
            </div>
        </label>

    </div>
    {{-- Bizarre --}}
    <div class="mr-6">

        <label class="items-center cursor-pointer">
            <!-- toggle -->
            <div class="relative">
                <!-- input -->
                <input type="checkbox" id="toggleB" class="sr-only" name="bizarre" value="bizarre">
                <!-- line -->
                <div class="block peer hidden">
                </div>
                <!-- dot -->
                <div name="onclick"
                    class="dot shadow-lg relative bg-yellow-50 border border-gray-800 items-center flex px-5 h-12 rounded-full transition peer-checked:bg-indigo-700 text-center">
                    <label for="bizarre"
                        class="items-center whitespace-nowrap text-gray-800 text-sm tracking-wider font-bold">Bizarre</label>
                </div>
            </div>
        </label>

    </div>
    {{-- Hilariously Dull --}}
    <div class="mr-6">

        <label class=" items-center cursor-pointer">
            <!-- toggle -->
            <div class="relative">
                <!-- input -->
                <input type="checkbox" id="dull" class="sr-only" name="dull" value="dull">
                <!-- line -->
                <div class="block peer hidden">
                </div>
                <!-- dot -->
                <div name="onclick"
                    class="dot shadow-lg relative bg-yellow-50 border border-gray-800 items-center flex px-5 h-12 rounded-full transition peer-checked:bg-indigo-700 text-center">
                    <label for="dull"
                        class="items-center whitespace-nowrap text-gray-800 text-sm tracking-wider font-bold">Hilariously
                        Dull</label>
                </div>
            </div>
        </label>

    </div>
    {{-- Nightmares --}}
    <div class="mr-6">

        <label class=" items-center cursor-pointer">
            <!-- toggle -->
            <div class="relative">
                <!-- input -->
                <input type="checkbox" id="nightmares" class="sr-only" name="nightmares" value="nightmares">
                <!-- line -->
                <div class="block peer hidden">
                </div>
                <!-- dot -->
                <div name="onclick"
                    class="dot shadow-lg relative bg-yellow-50 border border-gray-800 items-center flex px-5 h-12 rounded-full transition peer-checked:bg-indigo-700 text-center">
                    <label for="nightmares"
                        class="items-center whitespace-nowrap text-gray-800 text-sm tracking-wider font-bold">Nightmares</label>
                </div>
            </div>
        </label>

    </div>

</div>
