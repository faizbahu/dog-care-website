@component('mail::message')
    # Introduction

    A form has been submitted

    <table>
        @foreach($data as $key=>$value)
            <tr>
                <td>{{ Str::title($key) }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
