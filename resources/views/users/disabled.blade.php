{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
    See the LICENCE file in the repository root for full licence text.
--}}
@extends('master')

@section('content')
    @include('layout._page_header_v4')

    <div class="osu-page osu-page--generic">
        <h1>{{ trans('users.disabled.title') }}</h1>

        <p>
            {{ trans('users.disabled.reasons.opening') }}
        </p>

        <ul>
            <li>
                {!! trans('users.disabled.reasons.tos._', [
                    'community_rules' => tag('a', [
                        'href' => osu_url('user.rules'),
                    ], trans('users.disabled.reasons.tos.community_rules')),
                    'tos' => tag('a', [
                        'href' => route('legal', ['locale' => app()->getLocale(), 'path' => 'terms']),
                    ], trans('users.disabled.reasons.tos.tos')),
                ]) !!}
            </li>
            <li>
                {{ trans('users.disabled.reasons.compromised') }}
            </li>
        </ul>

        <p>
            {!! trans('users.disabled.warning') !!}
        </p>

        <p>
            {!! trans('users.disabled.if_mistake._', [
                'email' => tag('a', [
                    'href' => 'mailto:'.config('osu.emails.account')
                ], trans('users.disabled.if_mistake.email')),
            ]) !!}
        </p>

        @include('objects._enchant')
    </div>
@endsection
