@props(['company'])

<div class="company-card">
    <a class="company-link" href="/company/{{ $company['id'] }}"></a>
    <div class="company-img">
        <img src="/assets/company/logo/{{ $company['id'] }}/{{ $company['logo'] }}" width="100px" height="100px" alt="">
    </div>
    <div class="company-details">
        <div class="company-name">{{ $company['name'] }}</div>
        <div class="company-email">{{ $company['email'] }}</div>
        <div class="company-website"><a href="{{ $company['website'] }}">{{ $company['website'] }}</a></div>
    </div>
</div>