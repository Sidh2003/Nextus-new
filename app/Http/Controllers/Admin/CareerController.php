<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CareerController extends Controller
{
    public function index()
    {
        return view('Admin.Careers.index');
    }

    public function data(Request $request)
    {
        $query = Career::query();

        return DataTables::eloquent($query)
            ->editColumn('datetime', function ($career) {
                return $career->created_at->format('d-m-Y');
            })
            ->editColumn('full_name', fn($career) => $career->full_name)
            ->editColumn('email', function ($career) {
                if (!empty($career->email)) {
                    return '<a href="mailto:' . $career->email . '" class="text-primary">
                   ' . $career->email . '
                </a>';
                }
                return 'NA';
            })
            ->editColumn('mobile', function ($career) {
                if (!empty($career->mobile)) {
                    return '<a href="tel:' . $career->mobile . '" class="text-success">
                    ' . $career->mobile . '
                </a>';
                }
                return 'NA';
            })
            ->editColumn('job_function', fn($career) => $career->job_function) // make sure your DB column name is not "function"
            ->editColumn('location', fn($career) => $career->location)
            ->editColumn('portfolio_link', function ($career) {
                if (!empty($career->portfolio_link)) {
                    return '<a href="' . $career->portfolio_link . '" target="_blank" class="text-info">
                    ' . $career->portfolio_link . '
                </a>';
                }
                return 'NA';
            })

            ->editColumn('upload_resume', function ($career) {
                if (!empty($career->upload_resume)) {
                    $url = asset('storage/' . $career->upload_resume); // make sure resumes are stored in storage/app/public
                    return '<a href="' . $url . '" target="_blank" class="btn btn-sm btn-primary">View Resume</a>';
                }
                return 'NA';
            })

            ->editColumn('upload_portfolio', function ($career) {
                if (!empty($career->upload_portfolio)) {
                    $url = asset('storage/' . $career->upload_portfolio);
                    return '<a href="' . $url . '" target="_blank" class="btn btn-sm btn-success">View Portfolio</a>';
                }
                return 'NA';
            })
            ->editColumn('message', function ($career) {
                return !empty($career->message)
                    ? mb_strimwidth($career->message, 0, 97, '...')
                    : 'NA';
            })
            ->addColumn('action', function ($career) {
                $show = '<a href="' . route('admin.careers.show', ['career' => $career->id]) . '" 
                            class="badge bg-info fs-1 modal-one-btn" 
                            data-entity="careers" 
                            data-title="Career" 
                            data-route-key="' . $career->id . '">
                            <i class="fa fa-eye"></i></a>';
                return $show;
            })
            ->addIndexColumn()
            ->rawColumns([
                'datetime',
                'full_name',
                'email',
                'mobile',
                'job_function',
                'location',
                'portfolio_link',
                'upload_resume',
                'upload_portfolio',
                'message',
                'action'
            ])
            ->setRowId('id')
            ->make(true);
    }

    public function list()
    {
        $careers = Career::all();
        return response()->json([
            'status' => 'success',
            'list' => $careers
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Career $career)
    {
        return view('Admin.Careers.show', compact('career'));
    }

    public function edit(Career $career)
    {
        //
    }

    public function update(Request $request, $career)
    {
        //
    }

    public function destroy(Career $career)
    {
        //
    }
}
