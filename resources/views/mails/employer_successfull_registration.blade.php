@component('mail::message')
# Successfully Registered

Hi,
You are successfully registered.
<br>
Click  here for Login.
@component('mail::button', ['url' => URL::route('employer_login')])
Login
@endcomponent

Register your employees with this link.
@component('mail::button', ['url' => URL::route('employee_register')])
Register Employees
@endcomponent

Thanks,<br>Help Desk
@endcomponent
