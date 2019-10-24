<?php

namespace App\Exceptions;

use App\Menu;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Post;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        $menus = $this->getMenu();
        $footer = $this->getFooter();
        if($this->isHttpException($exception)){
            if($exception->getStatusCode() == 404){
                return response()->view('errors.'.'404', ['menus'], 404, compact('menus', 'footer'));
            }
            if($exception->getStatusCode() == 500){
                return response()->view('errors.'.'500', [], 500);
            }
        }
        return parent::render($request, $exception);
    }

    public function getMenu(){
        $menus = Menu::with('subMenu')->orderBy('sort','asc')->get();
        return $menus;
    }

    public function getFooter()
    {
        $footer = [];
        $footer['footerCol1'] = Post::where('slug', 'footer-col1')->first();
        $footer['footerCol2'] = Post::where('slug', 'footer-col2')->first();
        $footer['footerCol3'] = Post::where('slug', 'footer-col3')->first();
        $footer['footerCol4'] = Post::where('slug', 'footer-col4')->first();
        return $footer;
    }
}
