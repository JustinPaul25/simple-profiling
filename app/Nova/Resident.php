<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;

class Resident extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Model\Resident';

    public static function label(): string
    {
        return __('Residence');
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'first_name', 'last_name', 'middle_name', 'allias'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('First Name', 'first_name')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Text::make('Middle Name', 'middle_name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Last Name', 'last_name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Allias', 'allias')
                ->sortable()
                ->rules('required', 'max:255'),

            Select::make('Gender', 'gender')->options([
                    'M' => 'Male',
                    'F' => 'Female',
                ])->displayUsingLabels()
                ->rules('required'),

            Date::make('Birth Date', 'birth_date')
                ->format(config('nova.date_format'))
                ->pickerFormat('M d, Y'),

            Text::make('Birth Place', 'birth_place')
                ->sortable()
                ->rules('required', 'max:255'),

            Select::make('Civil Status', 'civil_status')->options([
                    'S' => 'Single',
                    'M' => 'Married',
                ])->displayUsingLabels()
                ->rules('required'),

            Boolean::make('Registered Voter', 'voter_status')
                ->trueValue(true)
                ->falseValue(false)
                ->rules('required'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
