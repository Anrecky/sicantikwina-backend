<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EducationCategoryController;

Route::get('/', function () {
    return view('homepage');
});

Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'isAdmin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.dashboard.analytics', ['title' => 'ADMIN SICANTIKWINA - SISTEM INFORMASI PENCEGAHAN TINDAK PERKAWINAN ANAK ', 'breadcrumb' => 'This Breadcrumb']);
        })->name('dashboard');
        Route::resource('pengaduan', ComplaintController::class)->names([
            'index' => 'complaint.index',
            'create' => 'complaint.create',
            'store' => 'complaint.store',
            'edit' => 'complaint.edit',
            'destroy' => 'complaint.destroy',
            'update' => 'complaint.update',
            'show' => 'complaint.show',
        ])->parameters([
            'pengaduan' => 'complaint'
        ]);
        Route::resource('edukasi', EducationController::class)->names([
            'index' => 'education.index',
            'create' => 'education.create',
            'store' => 'education.store',
            'edit' => 'education.edit',
            'destroy' => 'education.destroy',
            'update' => 'education.update',
            'show' => 'education.show',
        ])->parameters([
            'edukasi' => 'education'
        ]);
        Route::resource('kategori-edukasi', EducationCategoryController::class)->names([
            'index' => 'education-category.index',
            'create' => 'education-category.create',
            'store' => 'education-category.store',
            'edit' => 'education-category.edit',
            'destroy' => 'education-category.destroy',
            'update' => 'education-category.update',
            'show' => 'education-category.show',
        ])->parameters([
            'kategori-edukasi' => 'educationCategory'
        ]);
    });
    Route::prefix('app')->group(function () {
        Route::get('/calendar', function () {
            return view('pages.app.calendar', ['title' => 'Javascript Calendar | CORK - Multipurpose Bootstrap Dashboard Template', 'breadcrumb' => 'This Breadcrumb']);
        })->name('calendar');
        Route::get('/chat', function () {
            return view('pages.app.chat', ['title' => 'Chat Application | CORK - Multipurpose Bootstrap Dashboard Template', 'breadcrumb' => 'This Breadcrumb']);
        })->name('chat');
        Route::get('/contacts', function () {
            return view('pages.app.contacts', ['title' => 'Contact Profile | CORK - Multipurpose Bootstrap Dashboard Template', 'breadcrumb' => 'This Breadcrumb']);
        })->name('contacts');
        Route::get('/mailbox', function () {
            return view('pages.app.mailbox', ['title' => 'Mailbox | CORK - Multipurpose Bootstrap Dashboard Template', 'breadcrumb' => 'This Breadcrumb']);
        })->name('mailbox');
        Route::get('/notes', function () {
            return view('pages.app.notes', ['title' => 'Notes | CORK - Multipurpose Bootstrap Dashboard Template', 'breadcrumb' => 'This Breadcrumb']);
        })->name('notes');
        Route::get('/scrumboard', function () {
            return view('pages.app.scrumboard', ['title' => 'Scrum Task Board | CORK - Multipurpose Bootstrap Dashboard Template ', 'breadcrumb' => 'This Breadcrumb']);
        })->name('scrumboard');
        Route::get('/todo-list', function () {
            return view('pages.app.todolist', ['title' => 'Todo List | CORK - Multipurpose Bootstrap Dashboard Template', 'breadcrumb' => 'This Breadcrumb']);
        })->name('todolist');

        // Blog

        Route::prefix('/blog')->group(function () {
            Route::get('/create', function () {
                return view('pages.app.blog.create', ['title' => 'Blog Create | CORK - Multipurpose Bootstrap Dashboard Template ', 'breadcrumb' => 'This Breadcrumb']);
            })->name('blog-create');
            Route::get('/edit', function () {
                return view('pages.app.blog.edit', ['title' => 'Blog Edit | CORK - Multipurpose Bootstrap Dashboard Template ', 'breadcrumb' => 'This Breadcrumb']);
            })->name('blog-edit');
            Route::get('/grid', function () {
                return view('pages.app.blog.grid', ['title' => 'Blog | CORK - Multipurpose Bootstrap Dashboard Template ', 'breadcrumb' => 'This Breadcrumb']);
            })->name('blog-grid');
            Route::get('/list', function () {
                return view('pages.app.blog.list', ['title' => 'Blog List | CORK - Multipurpose Bootstrap Dashboard Template ', 'breadcrumb' => 'This Breadcrumb']);
            })->name('blog-list');
            Route::get('/post', function () {
                return view('pages.app.blog.post', ['title' => 'Post Content | CORK - Multipurpose Bootstrap Dashboard Template ', 'breadcrumb' => 'This Breadcrumb']);
            })->name('blog-post');
        });
    });
});
