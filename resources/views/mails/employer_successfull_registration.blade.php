@component('mail::message')
# Successfully Registered

Hi,
You are successfully registered.
<br>
Click  here for Login.
@component('mail::button', ['url' => 'http://ems/Employer/login'])
Login
@endcomponent

Register your employees with this link.
@component('mail::button', ['url' => 'http://ems/Employee/register'])
Register Employees
@endcomponent

Thanks,<br>Help Desk
@endcomponent
