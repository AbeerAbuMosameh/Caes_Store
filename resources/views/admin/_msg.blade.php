
<div style="width: 100%" class="container" >
    @if(Session::get('msg'))
        <?php
            $msg = Session::get('msg');
            $msgClass = 'alert-success';
            $first2Letter = strtolower(substr($msg,0,2));
            if($first2Letter=='s:'){
                $msgClass = 'alert-success';
                $msg=substr($msg,2);//قص اول حرفين
            }
            else if($first2Letter=='e:'){
                $msgClass = 'alert-danger';
                $msg=substr($msg,2);//قص اول حرفين
            }
            else if($first2Letter=='i:'){
                $msgClass = 'alert-info';
                $msg=substr($msg,2);//قص اول حرفين
            }
            else if($first2Letter=='w:'){
                $msgClass = 'alert-warning';
                $msg=substr($msg,2);//قص اول حرفين
            }
        ?>
        <div class='alert {{$msgClass}}' style="height: 40px; padding: 10px;" role="alert">
            {{$msg}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="height: 40px; padding: 10px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
