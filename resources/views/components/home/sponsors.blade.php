<section
    x-cloak
    x-data="{}"
    class="mx-auto w-full max-w-screen-lg px-5 pt-40"
>
    <div
        x-data="{}"
        x-ref="sponsors_section"
        x-init="
            () => {
                if (reducedMotion) return
                gsap.timeline({
                    scrollTrigger: {
                        trigger: $refs.sponsors_section,
                        start: 'top bottom-=200px',
                    },
                })
                    .fromTo(
                        $refs.sponsors_section,
                        {
                            autoAlpha: 0,
                            x: -50,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                    )
                    .fromTo(
                        $refs.premium,
                        {
                            autoAlpha: 0,
                            x: 50,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '>-0.5',
                    )
                    .fromTo(
                        $refs.premium_heart,
                        {
                            autoAlpha: 0,
                            scale: 0,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'back.out',
                        },
                        '>-0.6',
                    )
                    .fromTo(
                        $refs.sponsors_header,
                        {
                            autoAlpha: 0,
                            x: -50,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.sponsors_header_underline,
                        {
                            autoAlpha: 0,
                            scaleX: 0,
                            transformOrigin: 'left',
                        },
                        {
                            autoAlpha: 1,
                            scaleX: 1,
                            duration: 0.5,
                            ease: 'circ.out',
                        },
                        '>-0.5',
                    )
                    .fromTo(
                        $refs.message,
                        {
                            autoAlpha: 0,
                            y: 50,
                        },
                        {
                            autoAlpha: 1,
                            y: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.sponsors_list.querySelectorAll('a > *'),
                        {
                            autoAlpha: 0,
                            scale: 0,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'back.out',
                            stagger: 0.1,
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.sponsor_button,
                        {
                            autoAlpha: 0,
                            y: 50,
                        },
                        {
                            autoAlpha: 1,
                            y: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.big_heart_top_right,
                        {
                            autoAlpha: 0,
                            scale: 0,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'back.out',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.big_heart_top_left,
                        {
                            autoAlpha: 0,
                            y: 100,
                            x: -20,
                        },
                        {
                            autoAlpha: 1,
                            y: 0,
                            x: 0,
                            duration: 1,
                            ease: 'sine.out',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.big_heart_bottom_right,
                        {
                            autoAlpha: 0,
                            y: 100,
                            x: 20,
                        },
                        {
                            autoAlpha: 1,
                            y: 0,
                            x: 0,
                            duration: 1,
                            ease: 'sine.out',
                        },
                        '>-0.5',
                    )
                    .fromTo(
                        $refs.mini_heart_1,
                        {
                            autoAlpha: 0,
                            y: 50,
                            x: 20,
                        },
                        {
                            autoAlpha: 1,
                            y: 0,
                            x: 0,
                            duration: 1,
                            ease: 'sine.out',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.mini_heart_2,
                        {
                            autoAlpha: 0,
                            y: 50,
                            x: 20,
                        },
                        {
                            autoAlpha: 1,
                            y: 0,
                            x: 0,
                            duration: 1,
                            ease: 'sine.out',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.mini_heart_3,
                        {
                            autoAlpha: 0,
                            y: 50,
                            x: 20,
                        },
                        {
                            autoAlpha: 1,
                            y: 0,
                            x: 0,
                            duration: 1,
                            ease: 'sine.out',
                        },
                        '<',
                    )
            }
        "
        class="relative z-[1] overflow-hidden rounded-3xl bg-gradient-to-tl from-[#CDD0E5] to-[#FFECEF] px-5 pb-32"
    >
        <h2 class="grid place-items-center pt-14">
            <span
                x-ref="premium"
                class="relative text-xl font-medium tracking-wider"
            >
                Our Premium

                <span
                    x-ref="premium_heart"
                    class="absolute -left-9 -top-2"
                >
                    <svg
                        width="26"
                        height="29"
                        class="scale-90"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M19.472 27.213a30.483 30.483 0 0 1-9.125-2.82 29.052 29.052 0 0 1-4.22-2.523c-1.33-.963-2.61-2.143-3.509-3.584-1.664-2.674-2.051-6.08-.828-8.978.549-1.3 1.416-2.49 2.532-3.35C5.437 5.095 7.005 4.404 8.49 4.74c1.485.336 2.614 1.606 3.232 2.989.327.725.55 1.5.665 2.282.104.706.147 1.604-.322 2.19l.825-.32c-.874-.991-1.186-2.327-1.045-3.62.142-1.293.793-2.536 1.632-3.556.88-1.07 1.969-2.159 3.186-2.828 1.116-.615 2.589-.82 3.705-.049.599.413 1.027 1.044 1.389 1.662.362.619.688 1.288.962 1.965.536 1.33.893 2.727 1.098 4.146.407 2.866.144 5.784-.563 8.57-.789 3.127-2.15 6.05-3.648 8.882-.1.192-.165.465.128.488.276.02.61-.292.735-.51 3.053-5.39 5.288-11.65 4.456-17.973a17.697 17.697 0 0 0-1.204-4.53c-.574-1.37-1.322-3.018-2.655-3.791-1.243-.72-2.816-.472-4.038.12-1.468.71-2.73 1.91-3.819 3.115-1.09 1.204-2.033 2.672-2.347 4.314-.295 1.551-.004 3.254 1.058 4.47.218.247.707-.172.825-.321 1.026-1.274.84-2.981.376-4.464-.437-1.395-1.218-2.776-2.454-3.599-2.933-1.942-6.608.422-8.438 2.796-2.058 2.663-2.74 6.17-1.724 9.43a10.967 10.967 0 0 0 2.718 4.485c1.25 1.25 2.827 2.307 4.385 3.22a30.65 30.65 0 0 0 11.064 3.87c.29.042.558-.148.734-.362.075-.091.35-.556.066-.598Z"
                            fill="currentColor"
                        />
                    </svg>
                </span>
            </span>

            <span class="relative z-10 inline-grid">
                <span
                    x-ref="sponsors_header"
                    class="text-2xl font-extrabold [grid-area:1/-1] lg:text-3xl"
                >
                    Sponsors
                </span>

                <span
                    x-ref="sponsors_header_underline"
                    class="relative -left-1 -z-10 h-5 w-[98%] self-end justify-self-start bg-rose-400/50 [grid-area:1/-1]"
                ></span>
            </span>
        </h2>

        <p
            x-ref="message"
            class="mx-auto max-w-lg pt-10 text-center text-lg text-dolphin"
        >
            Filament is open source at heart. Our sponsors fund new features,
            bug fixes, and our community support.
        </p>

        <div
            x-ref="sponsors_list"
            class="mt-16 grid gap-y-12"
        >
            <x-home.sponsors.tier heading="Partners">
                <x-home.sponsors.kirschbaum />

                <x-home.sponsors.whizzy />
            </x-home.sponsors.tier>

            <x-home.sponsors.tier heading="Gold">
                <x-home.sponsors.ploi />

                <x-home.sponsors.laradir />

                <x-home.sponsors.lunar />

                <x-home.sponsors.tapp-network />
            </x-home.sponsors.tier>

            <x-home.sponsors.tier heading="Silver">
                <x-home.sponsors.agiledrop />

                <x-home.sponsors.cleavr />

                <x-home.sponsors.creagi />

                <x-home.sponsors.datasauce />

                <x-home.sponsors.ecomsoft />

                <x-home.sponsors.dutch-coding-company />

                <x-home.sponsors.locale />

                <x-home.sponsors.lucky-media />

                <x-home.sponsors.server-auth />

                <x-home.sponsors.solution-forest />

                <x-home.sponsors.zeek />
            </x-home.sponsors.tier>
        </div>

        {{-- Sponsor Button --}}
        <div
            x-ref="sponsor_button"
            class="mt-16 flex justify-center pb-20"
        >
            <a
                x-ref="getstarted"
                href="https://github.com/filamentphp/filament?sponsor=1"
                class="group relative z-10 block text-white"
            >
                {{-- Button --}}
                <div
                    class="flex items-center justify-center gap-3 rounded-bl-3xl rounded-tr-3xl bg-midnight px-9 py-4 transition duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 motion-reduce:transition-none motion-reduce:group-hover:transform-none"
                >
                    <div>Sponsor Filament</div>
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22"
                            height="22"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill="currentColor"
                                d="m12 5.5l-.54.52l.01.011l.53-.53ZM8.962 18.91l-.465.59l.465-.59Zm6.076 0l-.464-.588l.464.589Zm-8.037-2.49a.75.75 0 0 0-.954 1.16l.954-1.16Zm-4.659-3.009a.75.75 0 1 0 1.316-.72l-1.316.72Zm11.128-5.38a.75.75 0 1 0 1.06-1.062L13.47 8.03ZM2.75 9.136c0-2.15 1.215-3.954 2.874-4.713c1.612-.737 3.778-.541 5.836 1.597l1.08-1.04C10.1 2.444 7.264 2.025 5 3.06C2.786 4.073 1.25 6.425 1.25 9.137h1.5ZM8.497 19.5c.513.404 1.063.834 1.62 1.16c.557.325 1.193.59 1.883.59v-1.5c-.31 0-.674-.12-1.126-.385c-.453-.264-.922-.628-1.448-1.043L8.497 19.5Zm7.006 0c1.426-1.125 3.25-2.413 4.68-4.024c1.457-1.64 2.567-3.673 2.567-6.339h-1.5c0 2.197-.9 3.891-2.188 5.343c-1.315 1.48-2.972 2.647-4.488 3.842l.929 1.178ZM22.75 9.137c0-2.712-1.535-5.064-3.75-6.077c-2.264-1.035-5.098-.616-7.54 1.92l1.08 1.04c2.058-2.137 4.224-2.333 5.836-1.596c1.659.759 2.874 2.562 2.874 4.713h1.5Zm-8.176 9.185c-.526.415-.995.779-1.448 1.043c-.452.264-.816.385-1.126.385v1.5c.69 0 1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16l-.929-1.178Zm-5.148 0c-.796-.627-1.605-1.226-2.425-1.901l-.954 1.158c.83.683 1.708 1.335 2.45 1.92l.93-1.177Zm-5.768-5.63a7.252 7.252 0 0 1-.908-3.555h-1.5c0 1.638.42 3.046 1.092 4.274l1.316-.72Zm7.812-6.66l2 1.998l1.06-1.06l-2-2l-1.06 1.061Z"
                            />
                        </svg>
                    </div>
                </div>

                {{-- Shadow --}}
                <div
                    class="absolute inset-0 -z-10 h-full w-full -translate-x-1.5 translate-y-1.5 rounded-bl-3xl rounded-tr-3xl bg-rose-300 transition duration-300 group-hover:-translate-x-2 group-hover:translate-y-2 group-hover:bg-butter motion-reduce:transition-none motion-reduce:group-hover:transform-none"
                ></div>
            </a>
        </div>

        {{-- Big Heart: Top Right --}}
        <div
            x-ref="big_heart_top_right"
            class="absolute right-10 top-1/3 -z-30 min-[500px]:top-10 min-[850px]:right-20 min-[850px]:top-32"
        >
            <svg
                width="52"
                class="scale-75"
                height="50"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g clip-path="url(#a)">
                    <path
                        d="M40.644 6.734 24.085.959a17.27 17.27 0 0 0-13.003.714 16.935 16.935 0 0 0-8.71 9.561L.985 15.18a16.659 16.659 0 0 0 .724 12.838 16.992 16.992 0 0 0 9.682 8.597l1.845.643c-.95 3.124-.916 8.056 5.55 12.776 0 0-2.082-5.864 1.442-10.337l7.742 2.692a17.263 17.263 0 0 0 13-.714 16.927 16.927 0 0 0 8.706-9.561l1.387-3.946a16.652 16.652 0 0 0-.726-12.842 16.986 16.986 0 0 0-9.693-8.592Z"
                        fill="#EDBACF"
                    />
                    <path
                        d="M39.569 16.468c-4.01-5.391-12.05.945-12.05.945s-2.233-9.92-8.789-8.22c-7.818 2.055-4.96 17.125 2.976 24.469C32.55 32.86 44.35 22.914 39.57 16.468Z"
                        fill="#E27AB4"
                    />
                    <path
                        opacity=".1"
                        d="M39.569 16.468a5.125 5.125 0 0 0-3.205-2.055c-.097.336-.201.685-.326 1.007a19.218 19.218 0 0 1-7.304 9.296 19.6 19.6 0 0 1-11.426 3.336 23.323 23.323 0 0 0 4.377 5.63c10.863-.821 22.663-10.768 17.884-17.214Z"
                        fill="#AE1E17"
                    />
                </g>
                <defs>
                    <clipPath id="a">
                        <path
                            fill="#fff"
                            d="M0 0h52v50H0z"
                        />
                    </clipPath>
                </defs>
            </svg>
        </div>

        {{-- Big Heart: Top Left --}}
        <div
            x-ref="big_heart_top_left"
            class="absolute left-10 top-1/2 -z-30 min-[500px]:top-10 min-[850px]:left-20 min-[850px]:top-32"
        >
            <svg
                width="82"
                height="147"
                class="scale-75 min-[850px]:scale-100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g>
                    <path
                        d="M.376 147 0 146.38c16.31-9.588 22.265-26.896 19.72-39.028-2.545-12.132-3.882-22.849 5.786-30.807 9.428-7.767 9.604-19.876 9.604-20.019h.728c0 .128-.208 12.593-9.892 20.568-9.356 7.703-8.043 18.19-5.546 30.107C23.001 119.564 16.975 137.237.376 147Z"
                        fill="#DB2512"
                    />
                    <path
                        d="M38.687 64.532c-2.153-1.876-1.6-5.676-1.6-5.676l-1.281-.509-1.28-.5s-2.153 3.18-5.01 3.18c0 0 .16 1.716 4.001 3.18 3.89 1.478 5.17.325 5.17.325Z"
                        fill="#E27AB4"
                    />
                    <path
                        d="M29.003 61.09c.945 3.18 7.155 5.565 10.012 3.847.584-.35-.088-1.168-.664-.795-2.049 1.24-7.619-.906-8.3-3.18-.191-.636-1.24-.477-1.048.167v-.04Z"
                        fill="#DB3486"
                    />
                    <path
                        d="M79.583 19.534c-9.292-13.412-29.195 1.43-29.195 1.43S45.722-3.322 29.756.39C10.708 4.802 16.502 41.675 35.15 60.088c26.266-1.153 55.533-24.55 44.433-40.554Z"
                        fill="#E27AB4"
                    />
                    <path
                        opacity=".1"
                        d="M79.583 19.534a13.36 13.36 0 0 0-2.705-2.926 32.605 32.605 0 0 1-1.513 5.032 33.186 33.186 0 0 1-9.792 13.51 33.494 33.494 0 0 1-15.166 7.083 33.608 33.608 0 0 1-16.72-1.126 33.419 33.419 0 0 1-14.063-9.052c2.545 10.113 8.003 20.583 15.526 28.033 26.266-1.153 55.533-24.55 44.433-40.554Z"
                        fill="#AE1E17"
                    />
                    <path
                        opacity=".3"
                        d="M33.71 19.637c-1.826 7.95-6.083 13.714-9.517 12.943-3.433-.77-4.753-7.839-2.929-15.765C23.09 8.889 27.34 3.1 30.772 3.88c3.433.779 4.754 7.83 2.937 15.757Z"
                        fill="#EBB8CD"
                    />
                </g>
                <defs>
                    <clipPath id="a">
                        <path
                            fill="#fff"
                            d="M0 0h82v147H0z"
                        />
                    </clipPath>
                </defs>
            </svg>
        </div>

        {{-- Big Heart: Bottom Right --}}
        <div
            x-ref="big_heart_bottom_right"
            class="absolute bottom-40 right-10 -z-30 min-[850px]:right-32"
        >
            <svg
                width="64"
                class="scale-90"
                height="121"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g clip-path="url(#a)">
                    <path
                        d="m61.17 120.94-.55-.2c5-14.47-.42-28.33-8.37-34.53-7.95-6.2-14.39-12.16-12.64-22.15 1.73-9.75-4.53-17.38-4.59-17.46l.45-.37c.07.08 6.5 7.92 4.72 17.94-1.72 9.67 4.61 15.49 12.41 21.58 8.12 6.33 13.67 20.45 8.57 35.19Z"
                        fill="#DB2512"
                    />
                    <path
                        d="M41.42 49.72c-2.31 0-4-2.7-4-2.7l-1.05.36-1.05.37s.35 3.1-1.44 4.57c0 0 1 1 4.16-.11 3.2-1.1 3.38-2.49 3.38-2.49Z"
                        fill="#EDBACF"
                    />
                    <path
                        d="M33.64 52.64c2.26 1.49 7.34-.27 8.2-2.84.17-.52-.67-.68-.84-.16-.61 1.84-5.18 3.42-6.8 2.36-.46-.3-1 .34-.56.64Z"
                        fill="#E27AB4"
                    />
                    <path
                        d="M42.97.42C30.18-3.05 25.72 16.54 25.72 16.54s-15.65-12.64-23.55-2C-7.25 27.24 15.72 47.1 36.9 48.79 52.5 34.37 58.24 4.54 42.97.42Z"
                        fill="#EDBACF"
                    />
                    <path
                        opacity=".1"
                        d="M42.97.42a11.23 11.23 0 0 0-3.21-.41 26 26 0 0 1 1.72 3.92 27 27 0 0 1-28.9 35.61 50.099 50.099 0 0 0 24.28 9.27C52.5 34.37 58.24 4.54 42.97.42Z"
                        fill="#AE1E17"
                    />
                    <path
                        opacity=".3"
                        d="M13.31 22.54c2.55 3.69 2.91 7.87.79 9.33s-5.89-.35-8.44-4-2.91-7.87-.8-9.33c2.11-1.46 5.9.3 8.45 4Z"
                        fill="#EBB8CD"
                    />
                </g>
                <defs>
                    <clipPath id="a">
                        <path
                            fill="#fff"
                            d="M0 0h63.14v120.93H0z"
                        />
                    </clipPath>
                </defs>
            </svg>
        </div>

        {{-- Mini Heart 1 --}}
        <div
            x-ref="mini_heart_1"
            class="absolute bottom-24 left-20 -z-30"
        >
            <svg
                width="27"
                height="24"
                class="-rotate-12 scale-110"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M24.1 1.458c-5.684-3.447-10.552 5.389-10.552 5.389S7.75-1.403 2.48 2.628c-6.303 4.825 2.037 17.57 12.013 21.32C24 19.145 30.888 5.562 24.099 1.458Z"
                    fill="#EDBACF"
                />
            </svg>
        </div>

        {{-- Mini Heart 2 --}}
        <div
            x-ref="mini_heart_2"
            class="absolute bottom-20 right-20 -z-30 min-[850px]:right-60"
        >
            <svg
                width="27"
                height="24"
                class="rotate-12 scale-90"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M24.1 1.458c-5.684-3.447-10.552 5.389-10.552 5.389S7.75-1.403 2.48 2.628c-6.303 4.825 2.037 17.57 12.013 21.32C24 19.145 30.888 5.562 24.099 1.458Z"
                    fill="#EDBACF"
                />
            </svg>
        </div>

        {{-- Mini Heart 3 --}}
        <div
            x-ref="mini_heart_3"
            class="absolute bottom-44 left-52 -z-30"
        >
            <svg
                width="27"
                height="24"
                class="rotate-[20deg] scale-90"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M24.1 1.458c-5.684-3.447-10.552 5.389-10.552 5.389S7.75-1.403 2.48 2.628c-6.303 4.825 2.037 17.57 12.013 21.32C24 19.145 30.888 5.562 24.099 1.458Z"
                    fill="#EDBACF"
                />
            </svg>
        </div>

        {{-- White Cloud --}}
        <div class="absolute -bottom-2 left-0 -z-40">
            <svg
                width="1192"
                height="129"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M1192 4.917c-11.53-4.855-24.17-6.148-36.39-3.722-12.22 2.425-23.5 8.465-32.47 17.388-6.2-7.324-14.2-12.794-23.14-15.843a51.067 51.067 0 0 0-27.72-1.493c-9.2 2.071-17.69 6.653-24.6 13.27-6.91 6.616-11.98 15.026-14.68 24.354-5.37-4.4-11.57-7.582-18.2-9.34a47.147 47.147 0 0 0-20.292-.857 47.816 47.816 0 0 0-18.869 7.774c-5.691 3.933-10.518 9.062-14.164 15.054-3.97-3.82-8.876-6.44-14.185-7.578a28.74 28.74 0 0 0-15.93 1.123c-5.11 1.873-9.627 5.159-13.059 9.5-3.431 4.34-5.647 9.571-6.405 15.123-8.315-4.984-17.983-7.01-27.518-5.766-9.536 1.244-18.414 5.689-25.272 12.652-4.35-10.72-11.438-20.016-20.505-26.891-9.067-6.875-19.771-11.07-30.967-12.137-11.196-1.066-22.462 1.037-32.591 6.084-10.128 5.046-18.739 12.847-24.909 22.566a37.972 37.972 0 0 0-26.146-.634c-8.528 2.892-15.838 8.722-20.708 16.518a37.543 37.543 0 0 0-12.552-8.882 36.486 36.486 0 0 0-14.93-3.005 36.518 36.518 0 0 0-14.858 3.363 37.62 37.62 0 0 0-12.349 9.181c-5.205-8.867-12.612-16.131-21.451-21.037-8.839-4.906-18.787-7.274-28.811-6.86-10.023.416-19.756 3.6-28.188 9.22-8.431 5.622-15.252 13.475-19.755 22.745a24.152 24.152 0 0 0-13.566-3.797 24.214 24.214 0 0 0-13.381 4.446 29.269 29.269 0 0 0-9.423-8.982 28.187 28.187 0 0 0-12.254-3.879 28.007 28.007 0 0 0-12.671 1.988 28.848 28.848 0 0 0-10.59 7.463c-2.802-7.1-7.519-13.217-13.589-17.623-6.07-4.405-13.237-6.913-20.646-7.224-7.41-.31-14.75 1.588-21.145 5.47-6.395 3.883-11.576 9.585-14.925 16.427-4.028-3.515-8.962-5.734-14.195-6.385a26.243 26.243 0 0 0-15.255 2.72 41.733 41.733 0 0 0-5.212-15.269 40.342 40.342 0 0 0-10.544-11.97 38.871 38.871 0 0 0-14.216-6.788 38.194 38.194 0 0 0-15.65-.537 38.683 38.683 0 0 0-14.619 5.799 40.081 40.081 0 0 0-11.288 11.221 41.542 41.542 0 0 0-6.179 14.878 42.166 42.166 0 0 0-.098 16.192 24.978 24.978 0 0 0-11.178-3.908 24.77 24.77 0 0 0-11.684 1.706c-1.333-12.635-6.707-24.449-15.27-33.567-8.562-9.118-19.824-15.019-31.999-16.767-12.174-1.748-24.564.758-35.205 7.12-10.641 6.36-18.924 16.213-23.535 27.995a31.848 31.848 0 0 0-15.488-5.758 31.57 31.57 0 0 0-16.231 2.822c-5.087 2.364-9.5 6.041-12.816 10.678a34.285 34.285 0 0 0-6.117 15.8 19.394 19.394 0 0 0-9.335-3.922 19.15 19.15 0 0 0-9.991 1.35c-.079-6.625-2.28-13.037-6.26-18.232-3.978-5.194-9.51-8.878-15.73-10.475a28.092 28.092 0 0 0-18.642 1.65c-5.866 2.667-10.712 7.27-13.779 13.088-2.65-11.98-8.54-22.934-16.982-31.584C22.256 40.283 11.61 34.294 0 31.665V129h1192V4.917ZM363.163 115.77a40.947 40.947 0 0 0 2.821-2.342 27.15 27.15 0 0 0 1.192 2.465l-4.013-.123Z"
                    fill="#fff"
                />
            </svg>
        </div>

        {{-- Gray Cloud --}}
        <div class="absolute -bottom-3 left-0 -z-50">
            <svg
                width="1192"
                height="200"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0 200h1192V30.858a62.54 62.54 0 0 0-30.7 16.81 63.21 63.21 0 0 0-16.98 30.745 29.044 29.044 0 0 0-13.78-12.74 28.794 28.794 0 0 0-18.64-1.607 28.957 28.957 0 0 0-15.73 10.197 29.284 29.284 0 0 0-6.26 17.748 19.623 19.623 0 0 0-9.99-1.306c-3.39.441-6.61 1.76-9.34 3.826a32.85 32.85 0 0 0-6.11-15.38 32.58 32.58 0 0 0-12.82-10.396 32.34 32.34 0 0 0-31.72 2.859c-4.61-11.469-12.89-21.06-23.53-27.253a54.878 54.878 0 0 0-35.203-6.934 55.054 55.054 0 0 0-32 16.315 55.706 55.706 0 0 0-15.275 32.67 25.385 25.385 0 0 0-22.894 2.152 39.977 39.977 0 0 0-.097-15.762 39.862 39.862 0 0 0-6.179-14.482 39.589 39.589 0 0 0-11.288-10.924 39.31 39.31 0 0 0-14.62-5.645 39.21 39.21 0 0 0-15.65.523 39.345 39.345 0 0 0-14.216 6.607 39.623 39.623 0 0 0-10.544 11.653 39.904 39.904 0 0 0-5.212 14.863 26.862 26.862 0 0 0-15.255-2.648 26.929 26.929 0 0 0-14.195 6.216 38.824 38.824 0 0 0-14.925-15.99 38.468 38.468 0 0 0-21.144-5.325 38.503 38.503 0 0 0-20.647 7.032 38.875 38.875 0 0 0-13.588 17.155 28.861 28.861 0 0 0-10.591-7.265 28.695 28.695 0 0 0-24.925 1.841 28.948 28.948 0 0 0-9.423 8.743 24.657 24.657 0 0 0-13.381-4.328 24.648 24.648 0 0 0-13.566 3.696 56.414 56.414 0 0 0-19.755-22.14 55.91 55.91 0 0 0-28.188-8.975 55.867 55.867 0 0 0-28.811 6.677 56.329 56.329 0 0 0-21.451 20.479 37.566 37.566 0 0 0-12.349-8.938 37.339 37.339 0 0 0-29.787-.349 37.547 37.547 0 0 0-12.553 8.647 39.221 39.221 0 0 0-20.68-16.067 38.945 38.945 0 0 0-26.118.589 62.108 62.108 0 0 0-24.91-21.967 61.626 61.626 0 0 0-32.59-5.922 61.744 61.744 0 0 0-30.968 11.814 62.321 62.321 0 0 0-20.504 26.177 43.8 43.8 0 0 0-25.272-12.316 43.671 43.671 0 0 0-27.518 5.613 29.96 29.96 0 0 0-6.405-14.722 29.673 29.673 0 0 0-13.059-9.247 29.482 29.482 0 0 0-15.93-1.094 29.598 29.598 0 0 0-14.185 7.377 48.913 48.913 0 0 0-14.164-14.654 48.54 48.54 0 0 0-18.869-7.567 48.414 48.414 0 0 0-20.295.835 48.593 48.593 0 0 0-18.192 9.091 53.12 53.12 0 0 0-14.679-23.724 52.6 52.6 0 0 0-24.617-12.927 52.388 52.388 0 0 0-27.728 1.457 52.695 52.695 0 0 0-23.147 15.436A64.177 64.177 0 0 0 36.385 1.19 63.928 63.928 0 0 0 0 4.82V200Z"
                    fill="#FBF2F7"
                />
            </svg>
        </div>
    </div>

    {{-- Dashed Separator --}}
    <div
        x-data="{}"
        x-ref="separator"
        x-init="
            () => {
                if (reducedMotion) return
                gsap.timeline({
                    scrollTrigger: {
                        trigger: $refs.separator,
                        start: 'top bottom-=150px',
                    },
                }).fromTo(
                    $refs.separator,
                    {
                        clipPath: 'polygon(0 0, 100% 0, 100% 0, 0 0)',
                    },
                    {
                        clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
                        duration: 0.7,
                        ease: 'circ.out',
                    },
                )
            }
        "
        class="bg-red my-8 grid h-24 place-items-center"
    >
        <div
            class="h-full border-r-[1.5px] border-dashed border-r-black/50"
        ></div>
    </div>
</section>
