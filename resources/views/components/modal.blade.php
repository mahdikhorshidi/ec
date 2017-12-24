<div id="{{$id}}" class="modal fade black-overlay animate" data-backdrop="false">
    <div class="modal-dialog fade-up-big modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$title}}</h5>
            </div>
            {{$fo}}
            <div class="modal-body p-lg">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لغو</button>
                {{$button}}
            </div>
            @if(isset($fo))
                {{Form::close()}}
            @endif
        </div>
    </div>
</div>