@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Seo</h3>
    

    <div class="card">
    <div class="card-header">
     Seo
    </div>

    <div class="card-body">
        {!! Form::open(['method' => 'POST', 'route' => ['admin.seos.store']]) !!}
            
                <div class="form-group">
                    {!! Form::label('url', 'Url'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
              
            </div>
            
                <div class="form-group">
                    {!! Form::label('title', 'Title'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_tag', old('meta_tag'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                </div>
           
                <div class="form-group">
                    {!! Form::label('keywords', 'Keywords'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('keywords', old('keywords'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                </div>
           
                <div class="form-group">
                    {!! Form::label('description', 'Description'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('description', old('description'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                </div>
            
                <div class="form-group">
                    {!! Form::label('alt_tag', 'Alt Tag'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('alt_tag', old('alt_tag'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                </div>
           
                <div class=" form-group">
                    {!! Form::label('canonical_tag', 'Canonical Tag'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('canonical_tag', old('canonical_tag'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                </div>
                               <div class=" form-group">
                    {!! Form::label('product_schema', 'product schema'.'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('product_schema', old('product_schema'), ['class' => 'form-control', 'placeholder' => '']) !!}
                   
                </div>
          
                <div class=" form-group">
                    {!! Form::label('Faq_schema', 'Faq schema'.'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('Faq_schema', old('Faq_schema'), ['class' => 'form-control', 'placeholder' => '']) !!}
                   
                </div>
           
          

           
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
            
         </form>


    </div>
</div>
@stop

