<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int $steam_id
 * @property int|null $discord_id
 * @property mixed|null $discord_token
 * @property mixed|null $discord_refresh_token
 * @property bool $barred
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserIp[] $ips
 * @property-read int|null $ips_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBarred($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDiscordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDiscordRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDiscordToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSteamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserIp
 *
 * @property int $id
 * @property string $user_id
 * @property mixed $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserIp whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperUserIp extends \Eloquent {}
}

