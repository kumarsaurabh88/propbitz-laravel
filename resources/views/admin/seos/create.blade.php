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
                    {!! Form::label('meta_title', 'Title'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_title', old('meta_title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                </div>
           
                <div class="form-group">
                    {!! Form::label('description', 'Description'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('description', old('description'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                    </div>

                <div class="form-group">
                    {!! Form::label('keywords', 'Keywords'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('keywords', old('keywords'), ['class' => 'form-control', 'placeholder' => '','required' => '']) !!}
                   
                </div>
           
                
           
                <div class=" form-group">
                    {!! Form::label('canonical_tag', 'Canonical Tag'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('canonical_tag', old('canonical_tag'), ['class' => 'form-control', 'placeholder' => '','required' => '']) !!}
                   
                </div>

                <div class=" form-group">
                    {!! Form::label('meta_twitter', 'Meta Twitter'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_twitter', old('meta_twitter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                   
                </div>

                <div class=" form-group">
                    {!! Form::label('meta_twitter_card', 'Meta Twitter Card'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_twitter_card', old('meta_twitter_card'), ['class' => 'form-control', 'placeholder' => '']) !!}
                   
                </div>

                <div class=" form-group">
                    {!! Form::label('meta_twitter_site', 'Meta Twitter Site'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_twitter_site', old('meta_twitter_site'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>

                <div class=" form-group">
                    {!! Form::label('meta_twitter_title', 'Meta Twitter Title'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_twitter_title', old('meta_twitter_title'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>

                <div class=" form-group">
                    {!! Form::label('meta_twitter_description', 'Meta Twitter Description'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_twitter_description', old('meta_twitter_description'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>

                <div class=" form-group">
                    {!! Form::label('og_url', 'OG URL'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('og_url', old('og_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>

                <div class=" form-group">
                    {!! Form::label('og_site_name', 'OG SITE NAME'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('og_site_name', old('og_site_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>

                <div class=" form-group">
                    {!! Form::label('robots', 'Robots'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('robots', old('robots'), ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
                
           
                <div class=" form-group">
                    {!! Form::label('Faq_schema', 'Faq schema'.'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('faq_schema', old('faq_schema'), ['class' => 'form-control', 'placeholder' => '']) !!}
                   
                </div>

           
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
            
         </form>


    </div>
</div>
@stop
