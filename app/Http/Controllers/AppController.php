<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AppController extends Controller {

	/**
	 * @Get("/")
	 */
	public function index()
	{
		return view('index');
	}

	/**
	 * @Get("/search")
	 */
	public function search()
	{
		$terms = str_replace([',', ', '], '+', \Input::get('keywords'));
		$country = \Input::get('country');

		$url = 'https://itunes.apple.com/search?term='.$terms.'&country='.$country.'&entity=software';

		$results = (array)json_decode(file_get_contents($url));

		return view('partials.results', compact('results'));
	}

	/**
	 * @Get("/reviews")
	 */
	public function reviews()
	{
		$id = \Input::get('id');
		$url = 'http://itunes.apple.com/rss/customerreviews/id='.$id.'/json';
		$data['results'] = (array)json_decode(file_get_contents($url));
		$data['name'] = \Input::get('name');


		return view('reviews', $data);
	}


}