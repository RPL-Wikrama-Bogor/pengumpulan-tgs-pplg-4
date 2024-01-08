@extends('layouts.template')

@section('content')
        <h4 display-10 style="margin-left: 230px; font-size: 18px; color: darkblue; margin-top: -30px;">Dashboard</h4>
        <p style="margin-left: 230px; font-size: 12px; color: #ADC4CE;">Home / Dashboard</p>
        <div style="display: flex; justify-content: space-between;">
        <div class="border border-light-subtle p-3" style="margin-left: 230px; margin-top: 60px; width: 650px; height: 150px; font-weight: 600; border-width: 5px; box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);">
            <span style="display: flex; flex-direction: column; align-items: start; margin-bottom: 30px; color: darkblue;">Surat Keluar</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
        </div>

        <div class="border border-light-subtle p-3" style="width: 300px; height: 150px; font-weight: 600; border-width: 5px; box-shadow: 0 0 8px rgba(0, 0, 0, 0.3); margin-top: 60px; margin-right: 50px;">
            <span style="display: flex; flex-direction: column; align-items: start; margin-bottom: 30px; color: darkblue;">Klasifikasi Surat</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
        </div>
    </div>
    <div style="display: flex; justify-content: space-between;">
        <div class="border border-light-subtle p-3" style="margin-left: 230px; margin-top: 30px; width: 300px; height: 150px; font-weight: 600; border-width: 5px; box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);">
            <span style="display: flex; flex-direction: column; align-items: start; margin-bottom: 30px; color: darkblue;">Staff Tata Usaha</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
        </div>

        <div class="border border-light-subtle p-3" style="width: 650px; height: 150px; font-weight: 600; border-width: 5px; box-shadow: 0 0 8px rgba(0, 0, 0, 0.3); margin-top: 30px; margin-right: 50px;">
            <span style="display: flex; flex-direction: column; align-items: start; margin-bottom: 30px; color: darkblue;">Guru</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
        </div>
    </div>
@endsection