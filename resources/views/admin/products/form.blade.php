<div class="padding">
    <div class="row-col h-auto m-b-lg">
        <div class="col-sm-3">
            <div class="col-sm-10 form-file">
                {!! Form::file('image') !!}
                <button class="white btn">انتخاب آواتار</button>
            </div>
        </div>
        <div class="col-sm-9 v-m h2 _300">
            <div class="p-l-xs">
                {!! Form::text('name', null, ['placeholder' => 'نام محصول','class' => 'form-control','required']) !!}
            </div>
        </div>
    </div>
    <!-- fields -->
    <div class="form-horizontal">
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">بارکد</label>
            <div class="col-sm-9">
                {!! Form::number('barcode', null, ['placeholder' => 'بارکد','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">گروه</label>
            <div class="col-sm-9">
                {!! Form::select(' categories[]',
                [],NULL, ['class'=>'form-control col-md-12 select2-multiple w-xxl', 'multiple', 'ui-jp'=>'select2',
                'ui-options'=>'{theme: \'bootstrap\',
                tags: true,
                // automatically creates tag when user hit space or comma:
                tokenSeparators: [",", " "],
                ajax: {
                    url: "time.php",
                    dataType: \'json\',
                    //search term
                    data: function (term, page) {
                        return {
                            q: term, // search term
                            page: page
                        };
                    },
                    results: function (data, page) {
                        return { results: data};
                    }
                }}','required']) !!}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label">ترتیب</label>
            <div class="col-sm-9">
                {!! Form::number('sort', null, ['placeholder' => 'ترتیب','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-9">
                <label class="md-switch">
                    {!! Form::checkbox('visible', null) !!}
                    <i class="blue"></i> قابل نمایش
                </label>
                {{ Form::submit('تایید',['class'=>'pull-right btn btn-primary']) }}
            </div>
        </div>
    </div>
    <!-- / fields -->
</div>