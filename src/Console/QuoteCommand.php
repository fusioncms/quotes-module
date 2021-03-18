<?php

namespace Addon\Quotes\Console;

use Illuminate\Support\Collection;
use Illuminate\Console\Command;

class QuoteCommand extends Command
{
	/**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:me';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some quotes to get you motivated.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return $this->info(
            Collection::make([
                "Life isn’t about getting and having, it’s about giving and being. - Kevin Kruse",
                "Whatever the mind of man can conceive and believe, it can achieve. - Napoleon Hill",
                "Strive not to be a success, but rather to be of value. - Albert Einstein",
                "Two roads diverged in a wood, and I—I took the one less traveled by, And that has made all the difference. - Robert Frost",
                "I attribute my success to this: I never gave or took any excuse. - Florence Nightingale",
                "You miss 100% of the shots you don’t take. - Wayne Gretzky",
                "I’ve missed more than 9000 shots in my career. I’ve lost almost 300 games. 26 times I’ve been trusted to take the game winning shot and missed. I’ve failed over and over and over again in my life. And that is why I succeed. - Michael Jordan",
                "The most difficult thing is the decision to act, the rest is merely tenacity. - Amelia Earhart",
                "Every strike brings me closer to the next home run. - Babe Ruth",
                "Definiteness of purpose is the starting point of all achievement. - W. Clement Stone",
                "I have learned over the years that when one’s mind is made up, this diminishes fear. - Rosa Parks",
                "It does not matter how slowly you go as long as you do not stop. - Confucius",
                "If you look at what you have in life, you’ll always have more. If you look at what you don’t have in life, you’ll never have enough. - Oprah Winfrey",
                "Remember that not getting what you want is sometimes a wonderful stroke of luck. - Dalai Lama",
                "You can’t use up creativity.  The more you use, the more you have. - Maya Angelou",
                "Dream big and dare to fail. - Norman Vaughan",
                "Our lives begin to end the day we become silent about things that matter. - Martin Luther King Jr.",
                "Do what you can, where you are, with what you have. - Teddy Roosevelt",
                "If you do what you’ve always done, you’ll get what you’ve always gotten. - Tony Robbins",
                "Dreaming, after all, is a form of planning. - Gloria Steinem",
                "It’s your place in the world; it’s your life. Go on and do all you can with it, and make it the life you want to live. - Mae Jemison",
                "You may be disappointed if you fail, but you are doomed if you don’t try. - Beverly Sills",
                "Remember no one can make you feel inferior without your consent. - Eleanor Roosevelt",
                "Life is what we make it, always has been, always will be. - Grandma Moses",
                "The question isn’t who is going to let me; it’s who is going to stop me. - Ayn Rand",
                "When everything seems to be going against you, remember that the airplane takes off against the wind, not with it. - Henry Ford",
                "It’s not the years in your life that count. It’s the life in your years. - Abraham Lincoln",
                "Change your thoughts and you change your world. - Norman Vincent Peale",
                "Either write something worth reading or do something worth writing. - Benjamin Franklin",
                "Nothing is impossible, the word itself says, “I’m possible!” – Audrey Hepburn",
                "The only way to do great work is to love what you do. - Steve Jobs",
                "If you can dream it, you can achieve it. - Zig Ziglar",
            ])->random()
        );
    }
}