{{--26--}}
<form action="" method="post">
    {{ csrf_field() }}
    <input name="title" value="{{ $post->title }}">
    <input name="description" value="{{ $post->description }}">
    <textarea name="text">{{ $post->text }}</textarea>
    <input name="date" type="date" value="{{ $post->date }}">
    <input name="submit" type="submit">
</form>
