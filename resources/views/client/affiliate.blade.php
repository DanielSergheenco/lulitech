<div class="p-6 text-gray-900 dark:text-gray-100">
    You referral Link: {{ $referralLink }}
    <h2>Referred Users:</h2>
    <ul>
        @foreach($referredUsers as $referredUser)
            <a href=""><li>{{ $referredUser->name }}</li></a>
        @endforeach
    </ul>
</div>
