# 🎯 خطة تحويل المساهمات إلى عقود عمل ريموت (Contracts & Hiring Funnel)

> [!IMPORTANT]
> وصلنا إلى **37 مساهمة برمجية احترافية (Pull Requests)** عبر **11 من أقوى مشاريع الـ Open-Source العالمية الممولة**!
> **إنجاز استثنائي اليوم:** اختراق مشروع **PostHog** (الممول بأكثر من 50 مليون دولار من Y Combinator و GV، وصاحب أعلى معدلات رواتب للمطورين عن بُعد عالمياً) بـ **[PR #122903](https://github.com/PostHog/posthog/pull/122903)** لحل **[Issue #121465](https://github.com/PostHog/posthog/issues/121465)**!

---

## 📊 سابقة الأعمال الحالية (37 PRs عبر 11 شركة عالمية ممولة)

### 1. PostHog (`posthog/posthog`) — [1 PR جديد + ممولة بـ 50M$+ من Y Combinator و GV]
1. [PR #122903](https://github.com/PostHog/posthog/pull/122903) & [Issue #121465](https://github.com/PostHog/posthog/issues/121465): `fix(workflows): lock broadcasts once sent or sending (#121465)` (Fixes #121465) — **[جديد + اختبارات Backend & Frontend شاملة]**
- **الكود المنفذ:**
  1. قفل حملات الـ Broadcast المرسلة أو قيد الإرسال على مستوى الـ Backend: في `hog_flow_writes.py` و `hog_flow.py`، أي حملة برودكاست (`origin_product == HogFlow.OriginProduct.BROADCASTS`) تم إطلاقها ولديها مهام دفعات (`HogFlowBatchJob`) يتم منع تعديل محتواها أو جمهورها أو شروط خروجها (`DRAFT_CONTENT_FIELDS`)، ومنع إعادتها لحالة `draft` أو عمل Staged Draft عليها عبر استثناء مخصص `BroadcastLocked`.
  2. منع الإرسال المتكرر لنفس كائن البرودكاست: فحص الـ `batch_jobs` endpoint لمنع إطلاق دفعة جديدة على برودكاست تم إرساله بالفعل وتوجيه المستخدم لعمل Duplicate.
  3. حماية الواجهة الأمامية: تحديث `canMoveToDraft` في `broadcastsLogic.ts` لطلب شرط `neverSent` حصراً حتى لا تظهر أزرار الرجوع للمسودة للحملات المرسلة، وتحديث تسمية الزر في `BroadcastSummary.tsx` إلى "Duplicate as draft".
  4. تغطية الاختبارات: بناء ملف اختبارات كامل `test_broadcast_locking.py` للتحقق من جميع مسارات الحماية والتحقق من عدم تأثر الـ Workflows العامة، وتحديث اختبارات الواجهة في `broadcastWorkflowEdits.test.ts`.

---

### 2. Twenty CRM (`twentyhq/twenty`) — [7 PRs + ممولة بـ 5M$+ من Y Combinator]
1. [PR #28412](https://github.com/twentyhq/twenty/pull/28412): `fix(metadata-store): adopt new collection hash on replaceDraft when data is unchanged` — **[MERGED 🎉 تم الدمج رسمياً بواسطة المؤسس والـ CTO Charles Bochet]**
- **الكود المنفذ:** حل مشكلة عدم تحديث الـ collection hash في الـ metadata store عند عمل replaceDraft عندما تكون البيانات مطابقة، مما كان يتسبب في عدم مزامنة الحالة مع الـ backend.
2. [PR #28744](https://github.com/twentyhq/twenty/pull/28744) & [Issue #28739](https://github.com/twentyhq/twenty/issues/28739): `fix(apollo): support multiple orderBy criteria in optimistic edge sorting (#28739)` (Fixes #28739) — **[جديد + 6 اختبارات Unit Tests شاملة]**
- **الكود المنفذ:** حل مشكلة تجاهل معايير الترتيب الثانوية (`secondary orderBy fields`) في الـ optimistic cache sorting داخل `sortCachedObjectEdges`. تم بناء محلل لجميع معايير الترتيب واستيفاء الترتيب عند تعادل القيم أو تعادل الـ `null` عبر الحقول المتتالية، مع الحفاظ على الترتيب الأصلي في حالة التعادل الكامل، وإضافة 6 اختبارات Unit Tests في `sortCachedObjectEdges.test.ts`.
3. [PR #28745](https://github.com/twentyhq/twenty/pull/28745) & [Issue #28737](https://github.com/twentyhq/twenty/issues/28737): `fix(workflow): normalize Content-Type header and preserve falsy bodies in HttpTool (#28737)` (Fixes #28737) — **[جديد + اختبارات Server & Shared شاملة]**
- **الكود المنفذ:** حل مشكلة حساسية حالة الأحرف في هيدر `Content-Type` في `HttpTool` و `parseDataFromContentType`، والحفاظ على الـ Falsy Bodies (`false` و `0`) عبر التحويل إلى `isDefined(body)`.
4. [PR #28425](https://github.com/twentyhq/twenty/pull/28425): `fix(record-form): block submission when field input has validation error` — **[Visual Regression: Passed 100%]**
5. [PR #28432](https://github.com/twentyhq/twenty/pull/28432): `fix(workflow): preserve logic function outputs and resolve link output schema`
6. [PR #28460](https://github.com/twentyhq/twenty/pull/28460): `fix(record-picker): prevent lost clicks and enable search enter selection in relation picker`
7. [PR #28513](https://github.com/twentyhq/twenty/pull/28513): `fix(record-picker): use ExtraLarge width for one-to-many relation pickers`
- **حالة التواصل:** تم نشر كومنت طلب الكونتراكت الرسمي على [PR #28513](https://github.com/twentyhq/twenty/pull/28513#issuecomment-6317988402) موجهاً لـ Félix Malfait و Charles Bochet.

---

### 3. Cap (`CapSoftware/Cap`) — [9 PRs + بديل Loom الممول من Vercel]
1. [PR #3007](https://github.com/CapSoftware/Cap/pull/3007) & [Issue #2984](https://github.com/CapSoftware/Cap/issues/2984): `fix(extension): mute only microphone audio tracks on mute toggle (#2984)` (Fixes #2984) — **[محدث باعتراف Greptile وكل التستات 10/10 خضراء]**
- **الكود المنفذ:** حل مشكلة كتم صوت التاب وصوت النظام بالكامل عند تفعيل زر كتم المايكروفون في الـ Chrome Extension عبر التحكم الحصري في مسارات المايكروفون مع 10 اختبارات Unit Tests في `audio-mute.test.ts`.
2. [PR #2912](https://github.com/CapSoftware/Cap/pull/2912): `feat(web): add 1.25x playback speed option` (Fixes #2842)
3. [PR #2926](https://github.com/CapSoftware/Cap/pull/2926): `fix(tooling): dedupe .env in turbo.json and drop deprecated --no-cache from dev:manual` (Fixes #2924) — **[MERGED 🎉 بواسطة Richie McIlroy]**
4. [PR #2927](https://github.com/CapSoftware/Cap/pull/2927): `fix(tooling): ignore vinxi timestamp sidecars in .gitignore` (Fixes #2923) — **[MERGED 🎉 بواسطة Richie McIlroy]**
5. [PR #2937](https://github.com/CapSoftware/Cap/pull/2937) & [Issue #2936](https://github.com/CapSoftware/Cap/issues/2936): `fix(web): prevent stale live video snapshot on distant timeline hover (#2936)` (Fixes #2936 / Linear CAP-880)
6. [PR #2974](https://github.com/CapSoftware/Cap/pull/2974) & [Issue #2968](https://github.com/CapSoftware/Cap/issues/2968): `fix(web): preserve numeric captions in VTT transcript parsers (#2968)` (Fixes #2968)
7. [PR #2975](https://github.com/CapSoftware/Cap/pull/2975) & [Issue #2931](https://github.com/CapSoftware/Cap/issues/2931): `fix(web): notify playback store subscribers on duration load while paused (#2931)` (Fixes #2931)
8. [PR #2977](https://github.com/CapSoftware/Cap/pull/2977) & [Issue #2976](https://github.com/CapSoftware/Cap/issues/2976): `fix(web): prompt sign-in overlay when unauthenticated viewer reacts with emoji (#2976)` (Fixes #2976) — **[مراجعة واعتماد Richie McIlroy — جاهز للمرج]**
9. [PR #2988](https://github.com/CapSoftware/Cap/pull/2988): `fix(web): notify subscribers when late fallbackDuration updates playback store` — **[متابعة بطلب ودعوة مباشرة من Richie McIlroy]**

---

### 4. Documenso (`documenso/documenso`) — [1 PR جديد + أضخم بديل DocuSign مفتوح المصدر (15.5k+ Stars) ممول بالكامل]
1. [PR #3479](https://github.com/documenso/documenso/pull/3479) & [Issue #3477](https://github.com/documenso/documenso/issues/3477): `fix(lib): auto-select regional languages like pt-BR from Accept-Language (#3477)` (Fixes #3477) — **[CodeRabbit SUCCESS / Vercel SUCCESS / 10 Tests Pass]**
- **الكود المنفذ:** حل مشكلة عدم اختيار اللغة البرتغالية البرازيلية (`pt-BR`) تلقائياً من هيدر `Accept-Language` عبر مطابقة التاج الإقليمي والـ Regional Fallback مع 10 اختبارات في `packages/lib/utils/i18n.test.ts`.

---

### 5. Plane (`makeplane/plane`) — [1 PR جديد + أضخم بديل Jira مفتوح المصدر (35k+ Stars) ممول من OSS Capital و YC]
1. [PR #10105](https://github.com/makeplane/plane/pull/10105): `[GIT-388] fix(utils): parse timestamps in local timezone for renderFormattedDate` (Fixes #10086 / Plane [GIT-388]) — **[CodeRabbit SUCCESS / Merge Risk: Minimal / 14/14 Checks Passed]**
- **الكود المنفذ:** حل مشكلة انحراف التواريخ بالسالب يوم كامل في المناطق الزمنية الشرقية (`Asia/Kolkata` / `Cairo`) بسبب تحويل التواريخ بصيغة UTC عبر مطابقة التاريخ المحلي مع 15 اختبار Unit Test.

---

### 6. Cal.com (`calcom/cal.diy`) — [1 PR مفتوح + ممولة بـ 25M$+ من Benchmark]
1. [PR #30371](https://github.com/calcom/cal.diy/pull/30371) & [Issue #30348](https://github.com/calcom/cal.diy/issues/30348): `fix(auth): support space-delimited OAuth2 scopes in authorize view` — **[CodeRabbit SUCCESS / Semgrep SUCCESS]**
- **الكود المنفذ:** دعم قراءة وتجزئة الصلاحيات المفصولة بمسافات وفقاً لمعيار RFC 6749 في شاشة تفويض OAuth2.

---

### 7. Omi (`BasedHardware/omi`) — [16 PRs + 20K$+ Bounties / Y Combinator]
- 16 مساهمة برمجية في استرجاع البيانات والـ RAG والمدفوعات ومنع الـ Downgrade غير المقصود مع تغطية اختبارات شاملة.

---

### 8. Langfuse (`langfuse/langfuse`) — [1 PR مفتوح + منصة LLM Engineering ممولة من Y Combinator]
1. [PR #19210](https://github.com/langfuse/langfuse/pull/19210) & [Issue #19198](https://github.com/langfuse/langfuse/issues/19198): `fix(web): preserve chat message role titles on non-generation observations`

---

## 💬 قنوات التواصل المباشر ومجتمعات Discord (Direct Outreach & Community Visibility)

> [!TIP]
> التواصل الفعّال مع المؤسسين ومسؤولي التوظيف في قنوات الديسكورد الرسمية للمشاريع يُعد أقصر طريق لتحويل الـ PRs إلى عقود عمل مدفوعة وتعيينات رسمية.

### 1. Chatwoot (`#contribute` + ثريد `Microsoft email setup · PR #13985`)
- **المخاطبون:** المؤسس الشريك والـ CTO **Sojan Jose** (`@sojan`) والمهندس **Jay** (`@Jay`).
- **تفاصيل التحرك:**
  - تم رصد مشكلة توقف ميزة ربط إيميل مايكروسوفت (Microsoft Graph API) المعطلة منذ فترة بسبب تضارب الـ scopes (`AADSTS28000 multi-resource error`).
  - تم تقديم عرض رسمي لمساعدة الكور تيم والتكفل بإعادة بناء التعديل بالكامل (`rebase on latest develop`) وتطبيق حل الـ scope isolation وكتابة كافة الـ Test specs.
  - تم فتح **[PR #16466](https://github.com/chatwoot/chatwoot/pull/16466)** ونشره في الثريد مع الحفاظ على الـ co-authorship واجتياز جميع الاختبارات، مما وضع مساهمتنا تحت الرادار المباشر لقيادة الشركة التقنية.

### 2. Twenty CRM (`#contributors`)
- **المخاطبون:** فريق Twenty Core (`@Félix`, `@charles`, `@nitin`).
- **تفاصيل التحرك:**
  - نشر تقديم رسمي للمساهمات المنجزة والمدمجة في النظام (#28425, #28412) والـ PRs النشطة (#29198, #29168).
  - لفت انتباه الفريق بذكاء إلى أن الـ 2-PR limit تسبب في إيقاف PR #29262 لحل مشكلة الـ HTML nesting RangeError (#29200)، مما حفز المهندس الأساسي **Tanguy Magnaudet** على التدخل ونقل الحل فوراً ودمجه رسميًا في الكور عبر #29269!

### 3. Cap (`#development`)
- **المخاطبون:** المؤسس **Richie McIlroy** (`@Richie - Cap.so`) ومطورو المجتمع.
- **تفاصيل التحرك:**
  - الانضمام لقناة التطوير ومشاركة باقة الـ 5 PRs المفتوحة دفعة واحدة لتغطية معالجة المدد الزمنية وعدادات الأنشطة والـ pagination bounds (#3572, #3573, #3574, #3575, #3576).
  - إظهار الحماس لمستقبل المشروع وبناء تواصل إيجابي مباشر مع الفريق.

### 4. Umami Analytics (`#dev-chat`)
- **المخاطبون:** المبتكر والمينتينر **Mike** (`@mike`) ومطورو المنصة.
- **تفاصيل التحرك:**
  - التعريف بالنفس كـ Active Contributor وتوثيق المساهمات المدمجة في الـ duration formatters وحلول الـ UI وضبط الـ metrics mapping (#4690, #4715).
  - تثبيت التواجد الاحترافي في نقاشات الكور تيم لتعزيز فرص الرعاية والعمل عن بُعد.

