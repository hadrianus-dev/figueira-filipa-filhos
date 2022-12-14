<?php

declare(strict_types=1);

namespace Domain\Post\Models;

use Domain\Shared\Models\User;
use Domain\Comment\Models\Comment;
use Domain\Gallery\Models\Gallery;
use Domain\Category\Models\Category;
use Shetabit\Visitor\Traits\Visitable;
use Illuminate\Database\Eloquent\Model;
use Domain\Shared\Models\Concerns\HasSlug;
use Domain\Post\Models\Builders\PostBuilder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasKey;
    use HasSlug;
    use HasFactory;
    use Visitable;

    protected $fillable = [
        'key',
        'title',
        'slug',
        'body',
        'description',
        'published',
        'cover',
        'category_id',
        'user_id'
    ];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function getRouteKeyName(): string
    {
        return 'key';
    }

    public function newEloquentBuilder($query): PostBuilder
    {
        return new PostBuilder(
            query: $query
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            related: Category::class,
            foreignKey: 'category_id'
        );
    }

    
    public function gallery(): HasMany
    {
        return $this->hasMany(
            related: Gallery::class,
            foreignKey: 'post_id'
        );
    }
    
    public function comment(): HasMany
    {
        return $this->hasMany(
            related: Comment::class,
            foreignKey: 'post_id'
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id'
        );
    }
}
