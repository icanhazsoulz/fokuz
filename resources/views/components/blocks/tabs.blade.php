<section>
    <x-container>
        <x-header>Kontaktformular</x-header>
        <x-subheader>Fotoshooting oder Gutschein anfragen</x-subheader>
        <div class="grid grid-cols-3 gap-10">
            <div class="col-span-2 w-11/12 flex flex-col justify-center">
                <x-paragraph class="text-primary-focused">
                    Möchten Sie ein besonderes Fotoshooting organisieren oder einfach mehr erfahren? Erzählen Sie mir, wen Sie auf den Fotos sehen möchten — Ihre süßen Haustiere und welche genau, alleine oder mit ihren Lieblingsmenschen. Vergessen Sie nicht anzugeben, wo Sie leben und welche Zeit Ihnen am besten passt. Haben Sie besondere Wünsche oder Ideen für das Thema des Shootings?
                </x-paragraph>
                <x-paragraph class="text-primary-focused">
                    Dies ist nur eine Informationsanfrage, die Sie zu nichts weiter verpflichtet. Ich freue mich darauf, mehr über Ihre Wünsche zu erfahren und die Details Ihrer einzigartigen Fotosession zu besprechen!
                </x-paragraph>
            </div>
            <div class="col-span-1">
                <img src="assets/images/contacts.jpg" alt="" width="360">
            </div>
            <div class="col-span-2">
                <div x-data="{ tab: 'contact' }">
                    <div class="flex justify-between">
                        <x-button-tab
                            @click="tab = 'contact'"
                            ::class="tab === 'appointment' ? 'tab-active' : 'tab-inactive'"
                        >Bilden<br> schnelle Anfrage</x-button-tab>
                        <x-button-tab
                            @click="tab = 'appointment'"
                            ::class="tab === 'contact' ? 'tab-active' : 'tab-inactive'"
                        >Anwendung<br> für ein Fotoshooting</x-button-tab>
                    </div>
                    <div class="pt-8">
                        <div x-show="tab === 'contact'">
                            <livewire:forms.create-message />
                        </div>
                        <div x-show="tab === 'appointment'">
                            <livewire:forms.create-appointment />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</section>
