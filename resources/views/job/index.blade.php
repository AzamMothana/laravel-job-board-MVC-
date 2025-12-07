<div>
    <h1>job board {{ $name }}</h1>

    @foreach ($jobs as  $job)
        <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
        
    @endforeach
</div>
