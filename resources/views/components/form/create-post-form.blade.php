<div class="container shadow-lg rounded-2xl bg-yellow-50 flex flex-col lg:w-1/2 justify-center mx-auto flex-wrap">

    <form class="mx-10 mt-8 mb-5 text-gray-800" method="POST" action="{{route('store-post',Auth::user()->username)}}" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center text-3xl font-semibold text-gray-800">{{ $slot }}
        </h2>
        <x-form.input name="title" required />
        {{-- <x-form.textarea name="excerpt" required class="h-54 text-3xl"/> --}}
        <x-form.textarea name="body" required class="h-96 text-3xl"/>
    
        <div class="grid grid-cols-3 gap-10 items-center">
        <x-form.field>
            <x-form.label name="category" />

            <select class="w-full" name="category_id" id="category_id" required>
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ ucwords($category->name) }}</option>
                @endforeach
            </select>

            <x-form.error name="category" />
        </x-form.field>

        <x-form.field>
            <label>Make this post visible to anyone</label>
            <input type="checkbox" name="public" id="public" value="1"/>
            <x-form.error name="public"/>
        </x-form.field>
    
        <x-form.field>
            <label>Contains explicit content</label>
            <input type="checkbox" name="explicit_content" id="explicit_content" value="1"/>
            <x-form.error name="explicit_content"/>
        </x-form.field>
    </div>

        <div class="flex justify-center">
        <button type="submit"
            class=" mx-auto mt-8 bg-pink-700 text-yellow-50 rounded-full text-center px-6 py-4 shadow-lg tracking-wider uppercase text-sm font-bold">
            Post
        </button>
        </div>
    </form>

</div>