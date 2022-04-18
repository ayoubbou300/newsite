@props(['disabled' => false,'image'=>true])
<head>
    <style>
        .removeOutline:focus{
            outline: none;
            border-color: inherit;
  -webkit-box-shadow: none;
  box-shadow: none;
        }
    </style>
</head>
<div class='border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'>
    <div class='flex flex-row items-center'>

        <div>
            {{ $image }}
        </div>
        
        <div >
            <div>{{$slot}}</div>
            <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'removeOutline' ,'style'=>'outline:none;border:none;']) !!}>
        </div>
    </div>
   
   
</div>