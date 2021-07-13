@component('mail::message')
# Successfully Registered

Hi,
You are successfully registered.
<br>
Click  here for Login.
@component('mail::button', ['url' => 'http://127.0.0.1:8000/Employer/login'])
Login
@endcomponent

Register your employees with this link.
@component('mail::button', ['url' => 'http://127.0.0.1:8000/Employee/register'])
Register Employees
@endcomponent

Thanks,<br>Help Desk
@endcomponent
