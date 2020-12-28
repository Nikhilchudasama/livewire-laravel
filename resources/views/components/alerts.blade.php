@props([
    'type' => ''
])


@php
    $msg = '';
    $type = '';
    if(isset($errors) && $errors->any()){
        $type = 'danger';
            foreach($errors->all() as $error){
                $msg .= $error.'<br/>';
            }
    }elseif(session()->get('success')){
        $type = 'success';
        if(is_array(json_decode(session()->get('success'), true))){
            $msg .= implode('', session()->get('success')->all(':message<br/>'));
        }else{
            $msg .= session()->get('success');
        }
    }elseif(session()->get('warning')){
        $type = 'warning';
        if(is_array(json_decode(session()->get('warning'), true))){
            $msg .= implode('', session()->get('warning')->all(':message<br/>'));
        }else{
            $msg .=session()->get('warning');
        }
    }elseif(session()->get('info')){
        $type = 'info';
        if(is_array(json_decode(session()->get('info'), true))){
            $msg .=implode('', session()->get('info')->all(':message<br/>'));
        }else{
            $msg .= session()->get('info');
        }
    }elseif(session()->get('danger')){
        $type = 'danger';
        if(is_array(json_decode(session()->get('danger'), true))){
            $msg .= implode('', session()->get('danger')->all(':message<br/>'));
        }else{
            $msg .= session()->get('danger');
        }
    }elseif(session()->get('message')){
        $type = 'message';
        if(is_array(json_decode(session()->get('message'), true))){
            $msg .= implode('', session()->get('message')->all(':message<br/>'));
        }else{
            $msg .= session()->get('message');
        }
    }

    $bgClass = '';
    switch ($type){
        case 'success':
            $bgClass = 'bg-green-400';
            break;
        case 'danger':
            $bgClass = 'bg-red-400';
            break;
        case 'info':
            $bgClass = 'bg-blue-400';
            break;
        case 'warning':
             $bgClass = 'bg-yellow-400';
            break;
        default:
            break;
    }
@endphp

@if($msg && $type)
<div x-data="{ show: true }" x-show="show"
     class="flex justify-between items-center relative text-white py-3 px-3 rounded-lg {{ $bgClass }}">
    <div>
        {!! $msg !!}
    </div>
    <div>
        <button type="button" @click="show = false">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div>
@endif
