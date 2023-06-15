@props(['count' => 0])

@for ($i = 0;  $i < $count; $i++)
    <div class="flex gap-[65px] p-[25px] items-center border-b-[1px] border-[#E9E9E9]">
        <div class="flex gap-x-[20px]">
            <div class="relative overflow-hidden rounded-sm w-[100px] h-[100px] bg-[#E9E9E9] shimmer">
                <img class="max-w-[110px] max-h-[110px] rounded-[12px]">
            </div>
        </div>

        <div class="grid gap-y-[10px]">
            <p class="w-[72px] h-[24px] bg-[#E9E9E9] shimmer"></p>
            <p class="w-[72px] h-[24px] bg-[#E9E9E9] shimmer"></p>
            <a class="w-[72px] h-[24px] bg-[#E9E9E9] shimmer"></a>
        </div>

        <p class="w-[30%] h-[27px] bg-[#E9E9E9] shimmer"></p>

        <div class="flex gap-x-[25px] rounded-[54px] py-[10px] px-[20px] items-center w-[40%] h-[48px] bg-[#E9E9E9] shimmer">
        </div>

        <div
            class="flex gap-x-[25px] rounded-[54px] py-[10px] px-[20px] items-center w-[50%] h-[46px] bg-[#E9E9E9] shimmer"
        >
        </div>
    </div>
@endfor
