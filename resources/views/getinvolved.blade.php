@vite('resources/css/app.css')
<x-navbar />
<x-banner :title="'Get Involved with Newah'" :text="'Choose Your Path, Strengthen Our Culture'" />
<div class="lg:mx-[120px] md:mx-[80px] sm:mx-[40px] mt-20 gap-8">

@php
$cards = [
    [
        'title' => 'Volunteer',
        'price' => 'Free',
        'includes' => [
            'Event shift meals',
            'Recognition awards',
            'Volunteer of the Month eligibility',
        ],
        'benefits' => [
            'Give back to your community',
            'Earn service hours & certificates',
            'Be part of every celebration',
        ],
        'button' => 'Volunteer',
        'href'=>'/login',
        'type' => true,
    ],
    [
        'title' => 'General Member',
        'price' => '$10/ year',
        'includes' => [
            'Invitations to all public events',
            'Access to community resources',
            'Workshop & performance eligibility',
        ],
        'benefits' => [
            'Join cultural activities & programs',
            'Stay informed via newsletter',
            'Show your talents at events',
        ],
        'button' => 'Become a Member',
        'href'=>'/payment',
        'type' => true,
    ],
    [
        'title' => 'Life Time Involvement',
        'price' => '$200/ Unlimited',
        'includes' => [
            'Free/discounted workshops',
            'Name listed as Life Member',
            'Cultural welcome package',
        ],
        'benefits' => [
            'Lifetime access for the whole household',
            'Priority event updates & early tickets',
            'Right to organize Newah events',
        ],
        'button' => 'Join us',
        'href'=>'/payment',
        'type' => False,
    ],
];
@endphp

<div class=" w-full justify-center grid lg:grid-cols-3 sm:grid-cols-2 gap-4">
    @foreach ($cards as $card)
        <x-membership-card 
            :title="$card['title']"
            :price="$card['price']"
            :includes="$card['includes']"
            :benefits="$card['benefits']"
            :button="$card['button']"
            :href="$card['href']"
            :type="$card['type']"
        />
    @endforeach
</div>
</div>
<div class="lg:mx-[120px] md:mx-[80px] sm:mx-[40px] m-12 gap-8">
    @php
    $services = [
        'Full Family Access',
        'Organize Events',
        'Access to All Activities',
        'Volunteer Opportunities',
        'Recognition Certificate',
        'Service Hours Credit',
    ];

    $plans = [
        'Life Time Involvement' => [true, true, true, true, false, false],
        'General Member' => [false, true, true, true, false, false],
        'Volunteer' => [false, false, false, true, true, true],
    ];
@endphp

<div class="bg-white border border-gray-200 px-[80px] py-[60px] rounded-md shadow-sm md:p-10">
    <h2 class="text-2xl md:text-3xl font-semibold text-center text-red-800 mb-6">Comparison Table</h2>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse ">
            <thead>
                <tr class="text-lg text-gray-800 font-semibold ">
                    <th class="py-4 pr-6">Services</th>
                    @foreach ($plans as $planName => $features)
                        <th class="py-3 px-6 text-center">{{ $planName }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="text-gray-700 text-base ">
                @foreach ($services as $index => $service)
                    <tr class="border-t border-gray-200">
                        <td class="py-4 pr-6">{{ $service }}</td>
                        @foreach ($plans as $plan)
                            <td class="text-center">
                                @if ($plan[$index])
                                    <span class="inline-block text-white text-sm rounded-md px-2 py-1"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6055_1891)">
<path d="M13.8259 7.34363L9.48999 11.6835L7.6189 9.84363C7.25269 9.47742 6.65952 9.47742 6.29312 9.84363C5.92671 10.2098 5.9269 10.803 6.29312 11.1694L8.79312 13.6694C9.00952 13.8553 9.2478 13.9452 9.48999 13.9452C9.73218 13.9452 9.96968 13.8536 10.1529 13.6705L15.1529 8.67054C15.5191 8.30433 15.5191 7.71117 15.1529 7.34476C14.7867 6.97835 14.1931 6.98035 13.8259 7.34363ZM10.74 0.50769C5.21655 0.50769 0.73999 4.98425 0.73999 10.5077C0.73999 16.0311 5.21655 20.5077 10.74 20.5077C16.2634 20.5077 20.74 16.0311 20.74 10.5077C20.74 4.98425 16.2634 0.50769 10.74 0.50769ZM10.74 18.6327C6.25952 18.6327 2.61499 14.9878 2.61499 10.5077C2.61499 6.02761 6.25952 2.38269 10.74 2.38269C15.2205 2.38269 18.865 6.02761 18.865 10.5077C18.865 14.9878 15.2205 18.6327 10.74 18.6327Z" fill="#388E3C"/>
</g>
<defs>
<clipPath id="clip0_6055_1891">
<rect width="20" height="20" fill="white" transform="translate(0.73999 0.50769)"/>
</clipPath>
</defs>
                                        </svg>
                                    </span>
                                @else
                                    <span class="inline-block text-white text-sm rounded-md px-2 py-1"><svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.24 1.88272C11.1386 1.88272 9.08433 2.50587 7.33706 3.67336C5.58979 4.84085 4.22796 6.50025 3.42377 8.44171C2.61959 10.3832 2.40918 12.5195 2.81915 14.5806C3.22912 16.6416 4.24105 18.5348 5.72699 20.0207C7.21292 21.5067 9.10611 22.5186 11.1672 22.9286C13.2282 23.3385 15.3645 23.1281 17.306 22.3239C19.2475 21.5198 20.9069 20.1579 22.0744 18.4107C23.2418 16.6634 23.865 14.6092 23.865 12.5077C23.8661 11.1121 23.5921 9.72996 23.0586 8.44035C22.525 7.15075 21.7424 5.979 20.7556 4.99215C19.7687 4.0053 18.597 3.22271 17.3074 2.68916C16.0178 2.15561 14.6356 1.88157 13.24 1.88272ZM13.24 20.6327C11.633 20.6327 10.0621 20.1562 8.72599 19.2634C7.38984 18.3706 6.34844 17.1017 5.73347 15.617C5.11851 14.1324 4.95761 12.4987 5.27111 10.9226C5.58462 9.34652 6.35845 7.89878 7.49475 6.76248C8.63105 5.62618 10.0788 4.85235 11.6549 4.53884C13.231 4.22534 14.8646 4.38624 16.3493 5.0012C17.8339 5.61617 19.1029 6.65757 19.9957 7.99372C20.8885 9.32987 21.365 10.9008 21.365 12.5077C21.3671 13.5753 21.1584 14.6328 20.7509 15.6196C20.3433 16.6063 19.7449 17.5028 18.99 18.2577C18.2351 19.0126 17.3386 19.611 16.3518 20.0186C15.3651 20.4262 14.3076 20.6349 13.24 20.6327Z" fill="#D32F2F"/>
                                        <path d="M16.8025 9.25772C16.6896 9.13927 16.5539 9.04498 16.4035 8.98055C16.2531 8.91612 16.0911 8.8829 15.9275 8.8829C15.7639 8.8829 15.602 8.91612 15.4516 8.98055C15.3012 9.04498 15.1654 9.13927 15.0525 9.25772L13.24 11.0702L11.49 9.32022C11.2572 9.09201 10.9436 8.96493 10.6176 8.96657C10.2916 8.96822 9.97935 9.09847 9.74881 9.32901C9.51826 9.55956 9.38802 9.87177 9.38637 10.1978C9.38472 10.5238 9.51181 10.8374 9.74001 11.0702L11.49 12.8202L9.74001 14.5702C9.51181 14.8031 9.38472 15.1166 9.38637 15.4426C9.38802 15.7687 9.51826 16.0809 9.74881 16.3114C9.97935 16.542 10.2916 16.6722 10.6176 16.6739C10.9436 16.6755 11.2572 16.5484 11.49 16.3202L13.24 14.5702L14.99 16.3202C15.2229 16.5484 15.5364 16.6755 15.8624 16.6739C16.1885 16.6722 16.5007 16.542 16.7312 16.3114C16.9618 16.0809 17.092 15.7687 17.0937 15.4426C17.0953 15.1166 16.9682 14.8031 16.74 14.5702L14.99 12.8202L16.74 11.0702C16.9744 10.8302 17.1107 10.5113 17.1223 10.1761C17.1338 9.84081 17.0198 9.51331 16.8025 9.25772Z" fill="#D32F2F"/>
                                        </svg>
                                    </span>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>


<x-banner2 :title="'Not sure where to start? '" :text="'We’ll help you choose.'" :primary_text="'Contact Us'" :secondary_text="'Learn more'" :p_href="'/contact'" :s_href="'/about'" />
<x-footer />