@component('mail::message')
# New Book: {{ $book->title}}

{{$book->description}}

@component('mail::button', ['url' =>url('/books/' . $book->id)])
View Book
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
