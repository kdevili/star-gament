@component('mail::message')
    # Welcome to Star Garment

    Hi! {{$user->name}}
    This is your username and password for Login stargarment.com, And Changing your password and updating your profile.

    **Your Username : {{$user->username}}
    **Your Password : {{$user->password}}

    **Login URL : {{$user->url}}

    Thank you,
    Admin,
    Star Garment.

    > This is autogenerate email, don't reply this. if you have any issue,
    > contact your admin.
@endcomponent
