@inject('stats', 'App\Stats');

<h1>Stats Summary</h1>
{{ $stats->TotalSubmission() }}