<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('created_at', 'DESC')->get();
        return view('member.index', compact('members'));
    }

    // Show the form for creating a new member
    public function create()
    {
        return view('member.create');
    }

    // Store a newly created member in the database
    public function store(Request $request)
    {
        $request->validate([
            'kode_member' => 'required|unique:member,kode_member',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        Member::create([
            'kode_member' => $request->input('kode_member'),
            'nama' => $request->input('nama'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
        ]);

        return redirect()->route('member.index')->with('success', 'Member created successfully.');
    }

    // Show the form for editing a specific member
    public function edit(Member $member)
    {
        return view('member.edit', compact('member'));
    }

    // Update a specific member in the database
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'kode_member' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        $member->update($request->all());

        return redirect()->route('member.index')->with('success', 'Member updated successfully.');
    }

    // Delete a specific member from the database
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('member.index')->with('success', 'Member deleted successfully.');
    }
}
