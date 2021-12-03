@component('mail::message')
# Mail Application Messaging

Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum non quo commodi deleniti iste, sed nemo officiis quisquam recusandae cum cumque vero exercitationem rem nobis! Nemo dolorem voluptatum dolores atque!

@component('mail::button', ['url' => 'https://www.drnyotwanawng.com'])
Click to go
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
