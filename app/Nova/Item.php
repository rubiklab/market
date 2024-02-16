<?php

namespace App\Nova;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\HasManyThrough;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Item extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\User>
     */
    public static $model = \App\Models\Item::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'uuid', 'title', 'sub_title', 'description'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            URL::make('Preview', fn () => route('item.view', $this->uuid)),

            Boolean::make('Published', 'published_at', function () {
                return $this->published_at != "";
            })->fillUsing(function ($request, $model, $attribute, $requestAttribute) {
                if ($request->published_at) {
                    $model->{$attribute} = \Carbon\Carbon::now()->toDateTimeString();
                } else {
                    $model->{$attribute} = null;
                }
            }),

            Text::make('Title')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Sub Title', 'sub_title')
                ->sortable()
                ->rules('max:255'),

            Textarea::make('Description'),

            Text::make('Price')
                ->rules('numeric', 'between:0,9999999999999.99'),

            Boolean::make('Sold', 'sold_at', function () {
                return $this->sold_at != "";
            })->fillUsing(function ($request, $model, $attribute, $requestAttribute) {
                if ($request->sold_at) {
                    $model->{$attribute} = \Carbon\Carbon::now()->toDateTimeString();
                } else {
                    $model->{$attribute} = null;
                }
            }),

            Images::make('Images', 'images') // second parameter is the media collection name
                // ->conversionOnPreview('medium-size') // conversion used to display the "original" image
                ->conversionOnDetailView('thumb') // conversion used on the model's view
                ->conversionOnIndexView('thumb') // conversion used to display the image on the model's index page
                ->conversionOnForm('thumb') // conversion used to display the image on the model's form
                ->fullSize() // full size column
                ->rules('required') // validation rules for the collection of images
                // validation rules for the collection of images
                ->singleImageRules('dimensions:min_width=100')
                ->setFileName(function ($originalFilename, $extension, $model) {
                    return md5($originalFilename) . '.' . $extension;
                })
                ->croppingConfigs(['aspectRatio' => 4 / 3])
                ->showStatistics()
                ->croppable(true),

            /*Text::make('Available Items', function () {
                return implode("<br>", $this->subItems->pluck('title')->all());
            })->asHtml(),

            HasMany::make('SubItems', 'subItems')->collapsable(),*/
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
