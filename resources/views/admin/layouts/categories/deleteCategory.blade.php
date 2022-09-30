<form method="POST" action="{{ route('category.destroy') }}" onsubmit="return ConfirmDelete( this )">
    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form>