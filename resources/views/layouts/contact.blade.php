@extends('layouts.master')
@section('content')  
<h1>Contact Page of Coman </h1> 

{!! Form::open(['route'=>'posts.store']) !!}  

<div class="form-group">  
    {{ form::label('name','Name')}}  
    {{form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}  
    </div>  
    <br>
<div class="form-group">  
        {{ form::label('gender','Gender')}}  
        {{ form::radio('gender','Male')}} Male  
        {{ form::radio('gender','Female')}} Female  
</div>      
<br>
<div class="form-group">  
    {{ form::label('profile','Profile')}}  
    {{form::select('list',['Software Developer','QA Analyst','Manager','HR'])}}  
    </div>  
<br>
<div class="form-group">  
    {{ form::label('dob','Date of Birth')}}  
    {{Form::date('dob', \Carbon\Carbon::now())}}  
    </div>  
    <br>

<div class="form-group">  
    {{form::label('skills','Skills Description')}}  
    {{form::textarea('body','',['placeholder'=>'Skills Description'])}}  
    </div>  
    <br>
    <div class="form-group">  
        {{ form::label('percentage','Percentage in 12th')}}  
        {{form::text('percent','',['class'=>'form-control','placeholder'=>'Percentage in 12th'])}}  
        </div>  
        <br> 
        <div class="form-group">  
            {{ form::label('experience','Experience')}}  
            {{form::number('exp','number')}}  
            </div> 
    <br>
    <div class="form-group">  
        {{ form::label('expected_salary','Expected Salary')}}  
        {{form::text('salary','',['placeholder'=>'Expected Salary'])}}  
        </div>  
        <br>
        <div class="form-group">  
            {{ form::label('resume','Resume Upload')}}  
            {{Form::file('resume')}}  
            </div>  
            <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!!Form::close()!!}  
        @stop                          
@section('footer')  
