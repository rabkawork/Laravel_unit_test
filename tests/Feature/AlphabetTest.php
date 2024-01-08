<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Testing\TestResponse;

class AlphabetTest extends TestCase
{
    use WithFaker;
    
    /**
     * Test the whole alphabet
     *
     * @return void
     */
    public function test_whole_alphabet_should_succeed()
    {
        $letters = range('A', 'Z');
        $response = $this->put( route('alphabet.check'), $letters);
        $this->assertStatusCode($response, 200);
    }

    /**
     * Test with 2 Letter Bs
     *
     * @return void
     */
    public function test_2_letter_B_should_fail()
    {
        $letters = ['A', 'B', 'C', 'B', 'Z'];
        $response = $this->put( route('alphabet.check'), $letters);
        $this->assertStatusCode($response, 420);

    }

    /**
     * Test with B and b (small case)
     *
     * @return void
     */
    public function test_2_letter_B_in_diff_case_should_fail()
    {
        $letters = ['A', 'B', 'C', 'b', 'Z'];
        $response = $this->put( route('alphabet.check'), $letters);
        $this->assertStatusCode($response, 420);

    }

    /**
     * Test with B and b (small case)
     *
     * @return void
     */
    public function test_unique_random_letters_should_succeed()
    {
        $letters = $this->faker->randomElements(range('a', 'z'), 20, false);
        $response = $this->put( route('alphabet.check'), $letters);
        $this->assertStatusCode($response, 200);
    }

    /**
     * Test with B and b (small case)
     *
     * @return void
     */
    public function test_non_unique_random_letters_should_fail()
    {
        $letters = $this->faker->randomElements(range('a', 'z'), 100, true);
        $response = $this->put( route('alphabet.check'), $letters);
        $this->assertStatusCode($response, 420);
    }

    /**
     * Assert status code
     *
     * @param TestResponse $response
     * @param integer $statusCode
     * @return void
     */
    public function assertStatusCode(TestResponse $response, int $statusCode = 200)
    {
        if($response->status() !== $statusCode){
            dd($response->getContent());
        }
        $response->assertStatus($statusCode);
    }
}
