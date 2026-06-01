<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostsActionValidationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Aktifkan Filament auth jika perlu
    }

    /**
     * Test: Notes field wajib diisi (required validation)
     */
    public function test_notes_field_required()
    {
        $post = Post::factory()->create();
        
        // Simulate action dengan notes kosong
        $data = [
            'published' => true,
            'notes' => '', // Kosong - should fail
        ];

        // Validate data
        $validator = \Validator::make($data, [
            'notes' => 'required|min:5',
        ]);

        // Assert validation gagal
        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('notes', $validator->errors()->toArray());
    }

    /**
     * Test: Notes minimal 5 karakter (minLength validation)
     */
    public function test_notes_minimum_length_validation()
    {
        $post = Post::factory()->create();
        
        // Data dengan notes kurang dari 5 karakter
        $data = [
            'published' => true,
            'notes' => 'abc', // Hanya 3 karakter - should fail
        ];

        $validator = \Validator::make($data, [
            'notes' => 'required|min:5',
        ]);

        // Assert validation gagal
        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('notes', $validator->errors()->toArray());
    }

    /**
     * Test: Data valid - semua validasi passed
     */
    public function test_valid_action_data()
    {
        $post = Post::factory()->create();
        
        // Data yang valid
        $data = [
            'published' => true,
            'notes' => 'Valid notes text here', // > 5 karakter
        ];

        $validator = \Validator::make($data, [
            'notes' => 'required|min:5',
        ]);

        // Assert validation passed
        $this->assertFalse($validator->fails());
    }

    /**
     * Test: Update post dengan action yang valid
     */
    public function test_update_post_with_valid_action_data()
    {
        $post = Post::factory()->create(['published' => false]);
        
        $validData = [
            'published' => true,
            'notes' => 'Update from action',
        ];

        // Update post
        $post->update(['published' => $validData['published']]);

        // Assert data terupdate
        $this->assertTrue($post->refresh()->published);
    }
}
